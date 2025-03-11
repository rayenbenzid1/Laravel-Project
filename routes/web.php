<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\contactController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contact', [contactController::class, 'welcome']);
