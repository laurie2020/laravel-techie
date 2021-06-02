<?php

use App\Http\Controllers\ChiffreController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
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

// Chiffre
Route::resource('/chiffre', ChiffreController::class);

// Personne
Route::resource('/personne', PersonneController::class);

// Testimonial
Route::resource('/testimonial', TestimonialController::class);

// Service
Route::resource('/service', ServiceController::class);