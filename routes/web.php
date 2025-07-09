<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('welcome', function () {
    return view('welcome');
});

Route::get('session',[SessionController::class,'GetSession']);