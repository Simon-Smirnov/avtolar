<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('main');
// });

Route::view('/', 'home')->name('home');
