<?php

namespace App\Http\Controllers;

use App\Exceptions\ApiException;
use App\Http\Requests\ResendConfirmationRequest;
use App\Http\Requests\UserConfirmEmailRequest;
use App\Http\Requests\UserRegisterRequest;
use App\Http\Requests\UserSaveAdditionalDataRequest;
use App\Http\Requests\UserSaveIncomeAndProfessionRequest;
use App\Http\Requests\UserSaveAddressRequest;
use App\Http\Requests\UserSavePersonalReferenceRequest;
use App\Http\Requests\UserSaveDocumentsRequest;
use App\Http\Requests\UserSaveBankDetailsRequest;
use App\Http\Requests\UserCheckAlphaRequest;
use App\Http\Requests\UserSaveFacialBiometryDataRequest;
use App\Http\Requests\UserSaveFacialBiometryCameraBlockedInformationRequest;
use App\Http\Requests\UserGetFacialBiometryAppKeyRequest;
use App\Http\Requests\UserCreatePasswordRequest;
use App\Http\Resources\AuthUserResource;
use App\Http\Responses\SuccessResponse;
use App\Services\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * @var UserService
     */
    private $userService;

    /**
     * UserController constructor.
     * @param UserService $userService
     */
    public function __construct(
        UserService $userService
    ) {
        $this->userService = $userService;
    }

    public function index()
    {
        $user = Auth::user();
        $user->load([
            'address',
            'address.city',
            'address.city.state',
            'personalInfo',
            'phones',
            'bankAccounts',
            'rg',
        ]);

        return new AuthUserResource($user);
    }

    /**
     * @param UserRegisterRequest $request
     * @return UserRegisterResource
     * @throws ApiException
     * @throws \Exception
     */
    public function register(UserRegisterRequest $request)
    {
        try {
            return $this->userService->register($request);
        } catch (\Exception $exception) {
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    public function checkAlpha(UserCheckAlphaRequest $request)
    {
        try {
            return $this->userService->checkAlpha($request);
        } catch (\Exception $exception) {
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    /**
     * @param UserSaveAdditionalDataRequest $request
     * @return SuccessResponse
     * @throws ApiException
     * @throws \Exception
     */
    public function saveAdditionalData(UserSaveAdditionalDataRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->userService->saveAdditionalData($request);

            DB::commit();

            return new SuccessResponse("saved");
        } catch (\Exception $exception) {
            DB::rollBack();

            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    /**
     * @param UserSaveIncomeAndProfessionRequest $request
     * @return SuccessResponse
     * @throws ApiException
     * @throws \Exception
     */
    public function saveIncomeAndProfession(UserSaveIncomeAndProfessionRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->userService->saveIncomeAndProfession($request);

            DB::commit();

            return new SuccessResponse("saved");
        } catch (\Exception $exception) {
            DB::rollBack();
            
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    /**
     * @param UserSaveAddressRequest $request
     * @return SuccessResponse
     * @throws ApiException
     * @throws \Exception
     */
    public function saveAddress(UserSaveAddressRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->userService->saveAddress($request);

            DB::commit();

            return new SuccessResponse("saved");
        } catch (\Exception $exception) {
            DB::rollBack();
            
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    /**
     * @param UserSavePersonalReferenceRequest $request
     * @return SuccessResponse
     * @throws ApiException
     * @throws \Exception
     */
    public function savePersonalReference(UserSavePersonalReferenceRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->userService->savePersonalReference($request);

            DB::commit();

            return new SuccessResponse("saved");
        } catch (\Exception $exception) {
            DB::rollBack();
            
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    /**
     * @param UserSaveDocumentsRequest $request
     * @return SuccessResponse
     * @throws ApiException
     * @throws \Exception
     */
    public function saveDocuments(UserSaveDocumentsRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->userService->saveDocuments($request);

            DB::commit();

            return new SuccessResponse("saved");
        } catch (\Exception $exception) {
            DB::rollBack();
            
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    /**
     * @param UserSaveBankDetailsRequest $request
     * @return SuccessResponse
     * @throws ApiException
     * @throws \Exception
     */
    public function saveBankDetails(UserSaveBankDetailsRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->userService->saveBankDetails($request);

            DB::commit();

            return new SuccessResponse("saved");
        } catch (\Exception $exception) {
            DB::rollBack();
            
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    public function saveFacialBiometryData(UserSaveFacialBiometryDataRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->userService->saveFacialBiometryData($request);

            DB::commit();

            return new SuccessResponse("saved");
        } catch (\Exception $exception) {
            DB::rollBack();
            
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    public function saveFacialBiometryCameraBlockedInformation(UserSaveFacialBiometryCameraBlockedInformationRequest $request)
    {
        try {
            DB::beginTransaction();

            $this->userService->saveFacialBiometryCameraBlockedInformation($request);

            DB::commit();

            return new SuccessResponse("saved");
        } catch (\Exception $exception) {
            DB::rollBack();
            
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    public function getFacialBiometryAppKey(UserGetFacialBiometryAppKeyRequest $request)
    {
        try {
            $appKey = $this->userService->getFacialBiometryAppKey($request);

            return new SuccessResponse($appKey);
        } catch (\Exception $exception) {
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }
    
    /**
     * @param UserConfirmEmailRequest $request
     * @return SuccessResponse
     * @throws ApiException
     */
    public function confirmEmail(UserConfirmEmailRequest $request)
    {
        try {
            $status = $this->userService->confirmEmail($request);
    
            return new SuccessResponse("Código validado com sucesso.");
        } catch (\Exception $exception) {
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    /**
     * @param UserCreatePasswordRequest $request
     * @return SuccessResponse
     * @throws ApiException
     */
    public function createPassword(UserCreatePasswordRequest $request)
    {
        try {
            $status = $this->userService->createPassword($request);
    
            return new SuccessResponse("saved");
        } catch (\Exception $exception) {
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }

    /**
     * @param ResendConfirmationRequest $request
     * @return SuccessResponse
     * @throws \Exception
     */
    public function resendConfirmation(ResendConfirmationRequest $request)
    {
        try {
            $email = $request->input('email');
            $user = $this->userService->findByEmail($email);
    
            $emailToken = $this->userService->getOrCreateEmailToken($user);
            $this->userService->sendConfirmationEmail($user, $emailToken);
            
            return new SuccessResponse("Email reenviado com sucesso!");
        } catch (\Exception $exception) {
            $throwToBugsnag = false;

            if (!($exception instanceof ApiException)) {
                $throwToBugsnag = true;
            }

            handle($exception, $exception->getMessage(), 500, $throwToBugsnag);
        }
    }
}
