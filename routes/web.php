<?php

use Illuminate\Support\Facades\Route;

Route::any('{any}', function () {
    // Handle any route here
})->where('any', '.*');
Route::get('/', function () {
    return view('welcome');
});
