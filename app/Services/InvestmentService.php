<?php


namespace App\Services;


use App\Exceptions\NotFoundException;
use App\Models\IncomeTaxRate;
use App\Models\Investment;
use App\Models\InvestmentInstallment;
use App\Models\InvestmentRate;
use App\Models\Parameter;
use App\Models\User;
use App\Models\UserDocument;
use Illuminate\Support\Collection;

class InvestmentService
{
	/**
	 * @var FinancialProductService
	 */
	private $financialProductService;

	public function __construct(FinancialProductService $financialProductService)
	{
		$this->financialProductService = $financialProductService;
	}

	/**
	 * @param Investment $investment
	 * @return Collection
	 * @throws NotFoundException
	 */
	public function calculateInstallments(Investment $investment): Collection
	{
		$installments = new Collection();
		$incomeTaxRates = IncomeTaxRate::all();

		$net_interest_range = floor($investment->num_installments / 2);
		$accumulated_roi = 0;
		$accumulated_return = 0;

		for($i = 0; $i < $investment->num_installments; $i++) {

			if ( $i < $net_interest_range ) {
				$net_interest = $investment->amount * $investment->monthly_rate;
				$returned_amount = 0;
			} else {
				$net_interest = ( $investment->amount - $accumulated_return ) * $investment->monthly_rate;
				$returned_amount = $this->calculateInstallmentReturnedAmount($investment, $net_interest_range, $net_interest);
			}

			$gross_installment = $net_interest + $returned_amount;
			$accumulated_roi += $gross_installment;
			$incomeTaxRate = $this->findIncomeTaxRateFromMonth($incomeTaxRates, $i + 1);
			$incomeTaxDiscount = $net_interest * $incomeTaxRate;
			$net_installment = $gross_installment - $incomeTaxDiscount;
			$accumulated_return += $returned_amount;

			$installment = new InvestmentInstallment();
			$installment->net_interest = $net_interest;
			$installment->returned_amount = $returned_amount;
			$installment->gross_installment = $gross_installment;
			$installment->accumulated_roi = $accumulated_roi;
			$installment->income_tax_rate = $incomeTaxRate;
			$installment->income_tax_discount = $incomeTaxDiscount;
			$installment->net_installment = $net_installment;

			$installments->push($installment);
		}

		return $installments;
	}

	/**
	 * @param Investment $investment
	 * @param float $net_interest_range
	 * @param float $interest
	 * @return float
	 */
	private function calculateInstallmentReturnedAmount(Investment $investment, float $net_interest_range, float $interest): float
	{
		$interestValue = ( 1 + $investment->monthly_rate ) ** $net_interest_range;
		return ( $investment->amount /
				(($interestValue-1)/($interestValue * $investment->monthly_rate))) - $interest;
	}

	/**
	 * @param Collection $incomeTaxRanges
	 * @param int $month
	 * @return float
	 * @throws NotFoundException
	 */
	private function findIncomeTaxRateFromMonth(Collection $incomeTaxRanges, int $month): float
	{
		foreach ($incomeTaxRanges as $range) {
			if ( $month >= $range->min && $month <= $range->max ) {
				return $range->rate;
			}
		}

		throw new NotFoundException('Faixa de valor do IR não encontrada');
	}

	public function hasInvestment(User $user)
	{
		return Investment::query()
			->where('user_id', $user->id)
			->whereIn('status', [ Investment::PENDING, Investment::IN_PROGRESS ])
			->exists();
	}

	/**
	 * @param User $user
	 * @param array $data
	 * @return Investment
	 * @throws \Exception
	 */
	public function store(User $user, array $data)
	{
		$numInstallments = Parameter::get('investment.default.num_installments');

		$investmentRate = InvestmentRate::query()
			->where('rate', $data['monthly_rate'])
			->firstOrFail();

		$investment = new Investment();
		$investment->fill($data);
		$investment->user_id = $user->id;
		$investment->num_installments = $numInstallments;
		$investment->status = Investment::PENDING;
		$investment->liquidatable = $investmentRate->liquidatable;
		$investment->total_earnings = 0;

		$installments = $this->calculateInstallments($investment);

		foreach ($installments as $installment) {
			$investment->total_earnings += $installment->net_installment;
		}

		$investment->save();

		$this->financialProductService->createInstallments($installments, $data['payment_day']);

		return $investment;
	}

	public function find(User $user, int $id)
	{
		return Investment::query()
			->where('user_id', $user->id)
			->findOrFail($id);
	}

	public function attachDepositProof(Investment $investment, UserDocument $proof)
	{
		$investment->deposit_proof_id = $proof->id;
		$investment->save();
	}

	public function getCurrentInvestment(User $user)
	{
		return Investment::query()
			->where('user_id', $user->id)
			->eager()
			->latest()
			->first();
	}
}