<?php

use Illuminate\Support\Facades\Route;
use App\Models\User; // Import model User

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
    return view('home',);
})->name('home');


Route::get('/tentangKami', function () {
    return view('tentangKami',);
})->name('tentangKami');

Route::get('/artikel', function () {
    return view('artikel',);
})->name('artikel');


Route::get('/testdb', function () {
    return view('testdb', ['users' => User::all()]);
});


Route::get('/test', function () {
    return view('test',);
})->name('test');
