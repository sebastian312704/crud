<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use App\Http\Middleware\soloadmin;
use App\Http\Middleware\soloest;
use App\Http\Middleware\soloprof;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function ($middleware) {
        //$middleware->route('soloadmin', soloadmin::class);
        //$middleware->route('soloest', soloest::class);
        //$middleware->route('soloprof', soloprof::class);

    })
    ->withExceptions(function (Exceptions $exceptions) {
        // Manejo de excepciones
    })->create();

