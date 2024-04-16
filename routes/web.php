<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::any('{any}', function () {
    return response("Ok", 200)->header('Content-Type', 'text/html');
})->where('any', '.*');
