<?php

use App\Http\Controllers\Admin\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Admin\RegisteredUserController;
use App\Http\Controllers\Auth\VerifyEmailController;
use GuzzleHttp\Middleware;
use Illuminate\Support\Facades\Route;

Route::middleware('guest:staff')->group(function () {
    Route::get('staff/register', [RegisteredUserController::class, 'create'])
                ->name('register.admin');

    Route::post('staff/register', [RegisteredUserController::class, 'store']);

    Route::get('staff/login', [AuthenticatedSessionController::class, 'create'])
                ->name('login.admin');

    Route::post('staff/login', [AuthenticatedSessionController::class, 'store']);

    Route::get('staff/forgot-password', [PasswordResetLinkController::class, 'create'])
                ->name('password.request');

    Route::post('staff/forgot-password', [PasswordResetLinkController::class, 'store'])
                ->name('password.email');

    Route::get('staff/reset-password/{token}', [NewPasswordController::class, 'create'])
                ->name('password.reset');

    Route::post('staff/reset-password', [NewPasswordController::class, 'store'])
                ->name('password.store');
});

Route::middleware('auth:staff')->group(function () {
    Route::get('staff/verify-email', EmailVerificationPromptController::class)
                ->name('verification.notice');

    Route::get('staff/verify-email/{id}/{hash}', VerifyEmailController::class)
                ->middleware(['signed', 'throttle:6,1'])
                ->name('verification.verify');

    Route::post('staff/email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
                ->middleware('throttle:6,1')
                ->name('verification.send');

    Route::get('staff/confirm-password', [ConfirmablePasswordController::class, 'show'])
                ->name('password.confirm');

    Route::post('sraff/confirm-password', [ConfirmablePasswordController::class, 'store']);

    Route::put('staff/password', [PasswordController::class, 'update'])->name('password.update');

    Route::post('staff/logout', [AuthenticatedSessionController::class, 'destroy'])->middleware('clear-cache')->name('logout.admin');
});
