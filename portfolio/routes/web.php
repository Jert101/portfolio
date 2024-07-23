<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // return ('this is About');
    return view ('about');
});

Route::get('/product', function () {
    // return ('this is Product');
    return view ('product', ['name' => 'PAMU']);
});

Route::get('name/{name?}', function($name= 'Guest'){
    return ('My name is '. $name);
});

Route::get('/portfolio', function () {
    // return ('this is About');
    return view ('portfolio');
});