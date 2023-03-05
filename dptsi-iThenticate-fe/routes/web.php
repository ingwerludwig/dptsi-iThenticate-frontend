<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('dashboard_user');
});


Route::get('/upload', function () {
    return view('upload');
});

Route::get('/admin', function () {
    return view('dashboard_admin');
});


Route::get('/admin/edit_quota', function () {
    return view('edit_quota');
});

Route::get('/waiting', function () {
    return view('admin_waiting');
});