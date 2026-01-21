<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/education', function () {
    return view('user-page.education.index');
});
Route::get('/about-us', function () {
    return view('user-page.about-us.index');
});
