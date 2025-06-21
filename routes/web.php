<?php

use App\Http\Controllers\User\IndexController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::controller(IndexController::class)->group(function(){
    Route::get('/', 'index')->name('index');
    Route::get('about', 'about')->name('about');
    Route::get('contact', 'contact')->name('contact');
});
