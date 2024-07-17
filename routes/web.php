<?php

use App\Http\Controllers\HotelController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('indexes.welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', 'normal'])->middleware('clear-cache')->name('dashboard');

Route::get('admin/dashboard', function () {
    return view('admindashboard');
})->middleware(['auth:staff', 'verified', 'admin'])->middleware('clear-cache')->name('admin');

Route::get('staff/dashboard', function () {
    return view('staffdashboard');
})->middleware(['auth:staff', 'verified', 'staff'])->middleware('clear-cache')->name('staff');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/reservation/create/{room}', [ReservationController::class, 'create'])->name('reservation.create');
    Route::post('reservations', [ReservationController::class, 'store'])->name('reservation.store');

});


Route::get('/hotel', [HotelController::class, 'index'])->name('hotel.list');
Route::get('/hotel/{hotel}', [HotelController::class, 'show'])->name('hotel.show');



Route::view('guest/login', 'auth.guest.login')->name('loginGuest');

require __DIR__ . '/auth.php';
require __DIR__ . '/admin.php';
