<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

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
    $name = 'Veliko Plavetnilo';
    $age = 92;
    return view('welcome', compact('name', 'age'));
});
Route::get('/about', function () {
    $about = 'About us';
    return view('about', compact('about'));
});
Route::get('/cars', [CarsController::class, 'index'])->name('cars');

Route::get('/cars/{id}', [CarsController::class, 'show'])->name('single-car');
