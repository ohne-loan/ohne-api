<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Http\Requests\DepositProofRequest;
use App\Http\Requests\InvestmentSimulationRequest;
use App\Http\Requests\UserCompleteInvestmentRequest;
use App\Http\Resources\InvestmentResource;
use App\Http\Responses\SuccessResponse;
use App\Models\Investment;
use App\Models\InvestmentRate;
use App\Models\Parameter;
use App\Models\User;
use App\Services\AddressService;
use App\Services\BankAccountService;
use App\Services\DocumentsService;
use App\Services\InvestmentService;
use App\Services\RgService;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InvestmentController extends Controller
{
	/**
	 * @var InvestmentService
	 */
	private $investmentService;

	/**
	 * @var UserService
	 */
	private $userService;

	/**
	 * @var BankAccountService
	 */
	private $bankAccountService;

	/**
	 * @var RgService
	 */
	private $rgService;

	/**
	 * @var AddressService
	 */
	private $addressService;
	/**
	 * @var DocumentsService
	 */
	private $documentsService;

	/**
	 * InvestmentController constructor.
	 * @param InvestmentService $investmentService
	 * @param UserService $userService
	 * @param BankAccountService $bankAccountService
	 * @param RgService $rgService
	 * @param AddressService $addressService
	 * @param DocumentsService $documentsService
	 */
	public function __construct(InvestmentService $investmentService,
								UserService $userService,
								BankAccountService $bankAccountService,
								RgService $rgService,
								AddressService $addressService,
								DocumentsService $documentsService)
	{
		$this->investmentService = $investmentService;
		$this->userService = $userService;
		$this->bankAccountService = $bankAccountService;
		$this->rgService = $rgService;
		$this->addressService = $addressService;
		$this->documentsService = $documentsService;
	}

	public function show()
	{
		$user = Auth::user();
		$investment = $this->investmentService->getCurrentInvestment($user);

		return new InvestmentResource($investment);
	}

	/**
	 * @param InvestmentSimulationRequest $request
	 * @return \Illuminate\Http\JsonResponse
	 * @throws \ArithmeticError
	 * @throws \Exception
	 */
	public function simulate(InvestmentSimulationRequest $request)
	{
		$numInstallments = Parameter::get('investment.default.num_installments');
		$amount = (float) $request->input('amount');

		$monthly_rates = InvestmentRate::all()
			->pluck('rate');

		$investments = [];

		foreach ($monthly_rates as $rate) {
			$investment = new Investment();
			$investment->amount = $amount;
			$investment->monthly_rate = (float) $rate;
			$investment->num_installments = $numInstallments;
			$investment->total_earnings = 0;

			$installments = $this->investmentService->calculateInstallments($investment);

			foreach ($installments as $installment) {
				$investment->total_earnings += $installment->net_installment;
			}

			$investment->total_earnings = money($investment->total_earnings);

			$investments[] = $investment;
		}

		return response()->json([
			'data' => $investments
		]);
	}

	/**
	 * @param UserCompleteInvestmentRequest $request
	 * @return InvestmentResource
	 * @throws ApiException
	 * @throws \Exception
	 */
	public function invest(UserCompleteInvestmentRequest $request)
	{
		$data = $request->all();

		/* @var User $user */
		$user = $this->userService->getFromToken($data['email_token']);

		if ( $this->investmentService->hasInvestment($user) ) {
			throw new ApiException('Você só pode ter um investimento em aberto por vez', 422);
		}

		if ( ! in_array($data['investment']['payment_day'], Parameter::get('investment.payment.days')) ) {
			throw new ApiException('Data de recebimento inválida', 422);
		}

		try {
			DB::beginTransaction();

			$identityProofFront = $this->documentsService->find($data['user']['identity_proof_front_uuid']);
			$identityProofBack = $this->documentsService->find($data['user']['identity_proof_back_uuid']);
			$addressProof = $this->documentsService->find($data['address']['address_proof_uuid']);

			$data['user']['identity_proof_front_id'] = $identityProofFront->id;
			$data['user']['identity_proof_back_id'] = $identityProofBack->id;
			$data['address']['address_proof_id'] = $addressProof->id;

			$this->userService->complete($user, $data['user']);
			$this->rgService->store($user, $data['rg']);
			$this->addressService->store($user, $data['address']);
			$this->bankAccountService->store($user, $data['bank_account']);
			$investment = $this->investmentService->store($user, $data['investment']);

			$this->documentsService->moveToFinal($identityProofFront);
			$this->documentsService->moveToFinal($identityProofBack);
			$this->documentsService->moveToFinal($addressProof);

			DB::commit();
		} catch (\Exception $exception) {
			DB::rollBack();
			$this->documentsService->rollBack();
			handle($exception, 'Erro ao finalizar cadastro', 500);
		}

		return new InvestmentResource($investment);
	}

	/**
	 * @param DepositProofRequest $request
	 * @param $id
	 * @return SuccessResponse
	 * @throws ApiException
	 */
	public function depositProof(DepositProofRequest $request, $id)
	{
		$user = Auth::user();
		$depositProofUuid = $request->input('deposit_proof_uuid');

		try {
			$investment = $this->investmentService->find($user, $id);
			$proof = $this->documentsService->find($depositProofUuid);

			$this->investmentService->attachDepositProof($investment, $proof);
			$this->documentsService->moveToFinal($proof);
		} catch (\Exception $exception) {
			handle($exception, 'Erro ao gravar comprovante de depósito', 500);
		}

		return new SuccessResponse();
	}
}
