<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Customer/User Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix("portal")
    ->name('portal.')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function (Router $router) {
        $router->inertia("dashboard", "Dashboard")->name('dashboard');
    });
