<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::any('{any}', function () {
    // Handle any route here
})->where('any', '.*');
