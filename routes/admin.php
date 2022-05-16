<?php

use App\Http\Controllers\Admin\{
    DashController,
    PlanController
};
use Illuminate\Support\Facades\Route;


Route::get('', [DashController::class, 'index']);

Route::resource('/plans', PlanController::class)->names('plans');
