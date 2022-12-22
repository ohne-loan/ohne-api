<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['cors', 'api', 'afterLogin'])->group(function () {
    Route::name('oauth.token')
        ->post('oauth/token')
        ->uses('\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken');
});

Route::middleware(['cors'])->group(function () {
    Route::name('api.token')
    ->post('oauth/api/token')
    ->uses('Auth\\ApiController@auth');
});

Route::post('cron/emails', 'CronController@index');
Route::get('cron/healthcheck', 'CronController@healthCheck');
Route::post('cron/queueWork', 'CronController@queueWork');
Route::post('loans/notification', 'LoanController@postBackD4Sign')->name('d4sign');

Route::middleware(['cors', 'auth:api', 'scope:public'])->group(function () {
    Route::post('form-contact', 'FormContactController@index');

    Route::get('states', 'StateController@index');

    Route::apiResource('banks', 'BankController');

    Route::apiResource('education-levels', 'EducationLevelController');

    Route::apiResource('marital-statuses', 'MaritalStatusController');

    Route::apiResource('professional-classes', 'ProfessionalClassController');

    Route::apiResource('faq', 'FAQ\\FaqController');

    Route::apiResource('faq/categories', 'FAQ\\FaqCategorieController');

    Route::get('cep/{cep}', 'AddressController@show');

    Route::prefix('users')->group(function () {
        Route::post('/', 'UserController@register');

        Route::post('/checkAlpha', 'UserController@checkAlpha');

        Route::post('/additionalData', 'UserController@saveAdditionalData');

        Route::post('/incomeAndProfession', 'UserController@saveIncomeAndProfession');
        
        Route::post('/address', 'UserController@saveAddress');

        Route::post('/personalReference', 'UserController@savePersonalReference');

        Route::post('/documents', 'UserDocumentController@upload');

        Route::post('/saveDocuments', 'UserController@saveDocuments');

        Route::post('/bankDetails', 'UserController@saveBankDetails');

        Route::post('/facialBiometry', 'UserController@saveFacialBiometryData');

        Route::post('/facialBiometry/cameraBlocked', 'UserController@saveFacialBiometryCameraBlockedInformation');

        Route::post('/facialBiometry/appkey', 'UserController@getFacialBiometryAppKey');

        Route::post('/confirmation', 'UserController@confirmEmail');

        Route::post('/password', 'UserController@createPassword');

        Route::post('/{uuid}/complete/', 'UserController@complete');

        Route::post('/resend-confirmation', 'UserController@resendConfirmation');
    });

    Route::post('password', 'UserPasswordController@sendReset');
    Route::put('password/{token}/reset', 'UserPasswordController@reset')->name('password.reset');

    Route::get('/investments/simulation', 'InvestmentController@simulate');

    Route::post('/investments', 'InvestmentController@invest');

    Route::get('/loans/simulation', 'LoanController@simulate');

    Route::post('/loans', 'LoanController@getLoan');

    Route::get('/parameters', 'ParameterController@index');

    //Visualizar taxas de juros padrão do sistema
    Route::get('/rate', 'Admin\RateController@index');
});

Route::middleware(['cors', 'auth:api', 'afterLogin', 'scope:protected'])->group(function () {
    Route::apiResource('bank-accounts', 'BankAccountController');

    Route::apiResource('bank-accounts', 'BankAccountController');

    Route::apiResource('transfers', 'TransferController');

    Route::prefix('investments')->group(function () {
        Route::get('/', 'InvestmentController@show');

        Route::put('/{id}/deposit-proof', 'InvestmentController@depositProof');
    });

    Route::prefix('loans')->group(function () {
        Route::get('/', 'LoanController@show');
        Route::get('/payment-details', 'LoanController@getPaymentDetails');
        Route::get('/installments', 'LoanController@installments');
    });

    Route::get('/users', 'UserController@index');

    /* Invoice Routes */

    Route::post('/invoices', 'InvoiceController@store');
    Route::post('/invoices/issue', 'InvoiceController@issueInvoice');

    Route::prefix('admin')->group(function () {

        /* Users routes */
        Route::get('users', 'Admin\UserController@index')
            ->middleware('role:view_users');

        Route::get('users/{id}', 'Admin\UserController@show')
            ->middleware('role:view_users');

        Route::post('users', 'Admin\UserController@store')
            ->middleware('role:create_users');

        Route::put('users/{id}', 'Admin\UserController@update')
            ->middleware('role:edit_users');

        Route::delete('users/{id}', 'Admin\UserController@destroy')
            ->middleware('role:destroy_users');

        Route::put('users/{id}/my-account', 'Admin\UserController@myAccount')
            ->middleware('role:edit_users');

        Route::post('users/{id}/saveAdditionalDocument', 'Admin\UserController@saveAdditionalDocument')
            ->middleware('role:edit_users');

        /*My account*/
        Route::put('users/{id}/password', 'UserPasswordController@update')->name('password.update');

        /* Permissions routes */
        Route::get('permissions', 'Admin\PermissionController@index')
            ->middleware('role:view_permissions');

        /* Roles routes */
        Route::get('roles', 'Admin\RoleController@index')
            ->middleware('role:view_roles');

        Route::get('roles/{id}', 'Admin\RoleController@show')
            ->middleware('role:view_roles');

        Route::post('roles', 'Admin\RoleController@store')
            ->middleware('role:create_roles');

        Route::put('roles/{id}', 'Admin\RoleController@update')
            ->middleware('role:edit_roles');

        Route::delete('roles/{id}', 'Admin\RoleController@destroy')
            ->middleware('role:destroy_roles');

        /* Loan routes */
        Route::get('loans', 'Admin\LoanController@index');

        Route::get('loans/{id}', 'Admin\LoanController@show');

        Route::get('loans/installments/{id}', 'Admin\LoanController@showInstallments')
            ->middleware('role:view_progress_loans');

        Route::post('loans/accept', 'Admin\LoanController@approve')
            ->middleware('role:review_pending-approval_loans');

        Route::post('loans/pre-approve', 'Admin\LoanController@preApprove')
        ->middleware('role:review_pending-pre-approval_loans');
        
        Route::post('loans/reject', 'Admin\LoanController@reject')
            ->middleware('role:review_pending-pre-approval_loans');

        Route::post('loans/reject-by-partner', 'Admin\LoanController@rejectByPartner')
            ->middleware('role:review_pending-approval_loans');

        Route::post('loans/changeValueAndAmountOfInstallments', 'Admin\LoanController@changeValueAndAmountOfInstallments')
            ->middleware('role:review_pending-pre-approval_loans');

        Route::post('loans/observations', 'Admin\LoanController@observation')
            ->middleware('role:edit_loans');

        Route::get('loans/observations/{loanId}', 'Admin\LoanController@getObservations');

        Route::put('loans/{id}', 'Admin\LoanController@patch')
            ->middleware('role:review_pending-pre-approval_loans');

        /* Rate routes */
        Route::put('/rate', 'Admin\RateController@update')
            ->middleware('role:edit_rates');

        /* Log routes */
        Route::get('logs', 'Admin\LogController@index')
            ->middleware('role:view_logs');
    });
});
