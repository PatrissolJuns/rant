<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;

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
     * @return \Illuminate\Http\Response
     */
    public function render($request, Exception $exception)
    {
<<<<<<< HEAD
        /* if ($exception instanceof \PDOException)
        {
            return response()->view('errors.erreurPDO', [], 500);
        } */
=======
        //if ($exception instanceof \PDOException)
        //{
         //   return response()->view('errors.erreurPDO', [], 500);
        //}
>>>>>>> 5371469a6228d2ba4789c26a7aaa304ef18f096c
        return parent::render($request, $exception);
    }
}
