<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VendorApplicationController;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/food-drinks', function () {
    return view('food-drinks');
})->name('food-drinks');

Route::get('/property', function () {
    return view('property');
})->name('property');

Route::get('/reviews', function () {
    return view('reviews');
})->name('reviews');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/event-registration', [VendorApplicationController::class, 'create'])->name('vendor.application.create');

Route::post('/apply', [VendorApplicationController::class, 'store'])->name('vendor.application.store');
