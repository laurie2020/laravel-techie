<?php

use App\Http\Controllers\ChiffreController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\TestimonialController;
use App\Models\Chiffre;
use App\Models\Service;
use App\Models\Testimonial;
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
    $chiffres = Chiffre::all();
    $services = Service::all();
    $testimonials = Testimonial::all();
    return view('welcome', compact("chiffres", "services", "testimonials"));
});

// Admin
Route::get('/panel', function () {
    return view('backoffice.panel');
})->name('admin');
// Chiffre
Route::resource('/chiffre', ChiffreController::class);

// Personne
Route::resource('/personne', PersonneController::class);

// Testimonial
Route::resource('/testimonial', TestimonialController::class);

// Service
Route::resource('/service', ServiceController::class);