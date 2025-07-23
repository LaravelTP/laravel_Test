<?php

use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isEntrepreneur;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        //
        $middleware->alias(['isAdmin' => isAdmin::class]); 
        $middleware->alias(['isEntrepeneur'=>isEntrepreneur::class]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
