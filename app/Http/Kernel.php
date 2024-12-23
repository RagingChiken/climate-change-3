<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    protected $middleware = [
        
    ];

    protected $middlewareGroups = [
        'web' => [
            \App\Http\Middleware\LocalizationMiddleware::class,
            // Middleware lainnya...
        ],
    ];
    
    protected $routeMiddleware = [
        // Middleware lainnya...
        'localize' => \App\Http\Middleware\LocalizationMiddleware::class,
    ];      
}