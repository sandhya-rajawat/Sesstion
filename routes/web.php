<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\User;

Route::get('welcome', function () {
    return view('welcome');
});



  Route:: view('login','SessionView');
  Route:: view('profile','profile');




Route::Post('login',[SessionController::class,'GetSession']);

Route::get('logout',[SessionController::class,'logout']);

Route::get('user',[User::class,'GetUser']);