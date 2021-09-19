<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/produto/{id?}', function ($id = 1) {
    return view('produto', ['id' => $id]);
});

