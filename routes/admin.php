<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix("admin")
    ->name('admin.')
    ->middleware(['auth:sanctum', 'verified'])
    ->group(function (Router $router) {
        $router->inertia("dashboard", "Dashboard")->name('dashboard');
    });

