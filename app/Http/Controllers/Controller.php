<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    /**
     * The application's route middleware groups.
     *
     * @var array
     */
    protected $middlewareGroups = [
        'web' => [
            // Otros middlewares aquí...
            \App\Http\Middleware\RedirectBasedOnRole::class,
        ],

        'api' => [
            // Otros middlewares aquí...
        ],
    ];

    /**
     * The application's middleware stack.
     *
     * @var array
     */
    protected $middleware = [
        // Otros middlewares aquí...
    ];
}

