<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;

class Kernel extends HttpKernel
{
    // Other middleware...

    protected $middleware = [
        // Other middleware...
        \App\Http\Middleware\CorsMiddleware::class,
    ];

    // Other middleware...
}