<?php

namespace App\Http;

use Illuminate\Foundation\Http\Kernel as HttpKernel;
use Spatie\Permission\Middlewares\PermissionMiddleware;

class Kernel extends HttpKernel
{
    /**
     * The application's global HTTP middleware stack.
     *
     * These middleware are run during every request to your application.
     *
     * @var array<int, class-string|string>
     */
    protected $middleware = [
        // Other middleware
    ];

    /**
     * The application's route middleware groups.
     *
     * @var array<string, array<int, class-string|string>>
     */
    protected $middlewareGroups = [
        'web' => [
            // Other middleware
            \App\Http\Middleware\CheckSomethingNew::class,
        ],
        'api' => [
            // Other middleware
        ],
    ];

    /**
     * The application's route middleware.
     *
     * These middleware may be assigned to groups or used individually.
     *
     * @var array<string, class-string|string>
     */
    protected $routeMiddleware = [
        //'auth' => \App\Http\Middleware\Authenticate::class,
        //'permission' => \Spatie\Permission\Middlewares\PermissionMiddleware::class,
        //'role' => \Spatie\Permission\Middlewares\RoleMiddleware::class,
        // Other middleware
        'check.new' => \App\Http\Middleware\CheckSomethingNew::class, // Add this line
    ];
}

