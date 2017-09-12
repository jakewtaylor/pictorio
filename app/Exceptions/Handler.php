<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Foundation\Exceptions\Handler as ExceptionHandler;
use Illuminate\Auth\AuthenticationException;

class Handler extends ExceptionHandler {
    protected $dontReport = [
        //
    ];

    protected $dontFlash = [
        'password',
        'password_confirmation',
    ];

    public function report (Exception $exception) {
        parent::report($exception);
    }

    public function render ($request, Exception $exception) {
        return parent::render($request, $exception);
    }

    public function unauthenticated ($request, AuthenticationException $exception) {
        if ($request->expectsJson()) {
            return response()->json(['error' => 'Unauthenticated.'], 401);
        }

        return redirect()->guest(route('home'));
    }
}
