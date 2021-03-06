<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
})->name('profiler');

Route::get('/filemanager', function () {
    return view('filemanager');
})->name('filemanager');

Route::get('/kanban', function () {
    return view('kanban');
})->name('kanban');

Route::get('/contacts', function () {
    return view('contacts');
})->name('contacts');

Route::get('/calender', function () {
    return view('calender');
})->name('calender');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
