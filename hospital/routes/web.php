<?php

use Illuminate\Support\Facades\Route;
//use APP\Http\controller\HospitalController;
use App\Http\Controllers\HospitalController;
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
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/header', function () {
    return view('header');
});
Route::get('/doctors', function () {
    return view('doctors');
});
Route::get('backend/admin', function () {
    return view('backend/admin');
});
route::resource('/about', HospitalController::class);