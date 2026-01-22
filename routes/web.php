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
Route::get('/campus-life', function () {
    return view('user-page.campus-life.index');
});
Route::get('/activity-detail', function () {
    return view('user-page.campus-life.detail');
});
Route::get('/registration', function () {
    return view('user-page.registration.index');
});

Route::get('/admin', function () {
    return view('admin-page.dashboard');
});
