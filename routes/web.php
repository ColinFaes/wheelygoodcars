<?php

use App\Http\Controllers\CarsController;
use App\Http\Controllers\PDFController;
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
    return view('welcome');
})->name('home');

Route::get('/cars', [CarsController::class, 'show_all_cars'])->name('show_all_cars');

Route::middleware('auth')->group(function () {
    Route::get('/auto/aanbod/stap1', [CarsController::class, 'createOffer'])->name('cars.createOffer');
    Route::get('/auto/aanbod/stap2', [CarsController::class, 'createOfferStep2'])->name('cars.createOfferStep2');
    Route::get('/cars/personal', [CarsController::class, 'show_personal_cars'])->name('show_personal_cars');
    Route::get('/cars/details/{id}', [CarsController::class, 'show_car_details'])->name('show_car_details');
    Route::get('/cars/print/{id}', [PDFController::class, 'generatePDF'])->name('print_car');

    Route::post('/auto/aanbod/post', [CarsController::class, 'check_license_plate'])->name('check_license_plate');
    Route::post('/auto/aanbod/post2', [CarsController::class, 'create_new_car'])->name('create_new_car');
    Route::delete('/cars/{id}', [CarsController::class, 'destroy'])->name('cars.destroy');
});

require __DIR__.'/auth.php';
