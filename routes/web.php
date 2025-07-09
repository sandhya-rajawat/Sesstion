<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SessionController;

Route::get('welcome', function () {
    return view('welcome');
});



  Route:: view('login','SessionView');



Route::Post('login',[SessionController::class,'GetSession']);