<?php

use Illuminate\Support\Facades\Route;
//publiek

Route::get('/',[\App\Http\Controllers\WelcomeController::class,'index'])->name('home');
Route::get('/contact',[\App\Http\Controllers\ContactController::class,'index']);

//user die inlogt

//admin
