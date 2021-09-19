<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/', function () {

    $vetor = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];    

    return view('welcome', ['vetor' => $vetor]);
});

Route::get('/home', function () {
    return view('home');
});
