<?php

namespace App\Exceptions;

use Exception;
use http\Exception\BadMethodCallException;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Validation\ValidationException;
use ReflectionException;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class Handler extends ExceptionHandler
{
    /**
     * A list of the exception types that are not reported.
     *
     * @var array
     */
    protected $dontReport = [
        //
    ];

    /**
     * A list of the inputs that are never flashed for validation exceptions.
     *
     * @var array
     */
    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    /**
     * Report or log an exception.
     *
     * This is a great spot to send exceptions to Sentry, Bugsnag, etc.
     *
     * @param  \Exception  $exception
     * @return void
     */
    public function report(Exception $exception)
    {
        parent::report($exception);
    }

    /**
     * Render an exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Exception  $exception
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function render($request, Exception $exception)
    {
        if($request->acceptsJson()){

            if ($exception instanceof ValidationException)
                return response()->json(['message' => __('validation.message'), 'errors' => $exception->validator->getMessageBag()], 422);

            if( $exception instanceof NotFoundHttpException
                OR $exception instanceof MethodNotAllowedHttpException
            ) {
                return response()->json([
                    'status'=> 'error',
                    'error' => [
                        'code' => 404,
                        'message' => 'Requisição inválida ou não encontrada'
                    ]
                ], 404);
            }

            if( $exception instanceof ReflectionException
                OR $exception instanceof BadMethodCallException
            ) {
                return response()->json([
                    'status'=> 'error',
                    'error' => [
                        'code' => 500,
                        'message' => 'Requisicao inválida ou erro no servidor'
                    ]
                ], 500);
            }
        }

        return parent::render($request, $exception);
    }
}
