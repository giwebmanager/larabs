<?php

use Illuminate\Support\Facades\Route;

// Site
Route::get('/', function () {
    return view('site.home');
});

// Admin
Route::get(env('APP_ADMIN_URL'), function () {
    return view('admin.home');
});
