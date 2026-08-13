<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ForgetPasswordController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/signup' , [AuthController::class,'register'])->name('register');
Route::post ('/signup' , [AuthController::class,'registerPost'])->name('register.post');

Route::get('/login' , [AuthController::class,'login'])->name('login');
Route::post ('/login' , [AuthController::class,'loginPost'])->name('login.post');
Route::get('/logout' , [AuthController::class,'logout'])->name('logout');

Route::get('/forget-password' , [ForgetPasswordController::class, 'forgetPassword'])->name('forget.password');
Route::post('/forget-password' , [ForgetPasswordController::class, 'forgetPasswordPost'])->name('forget.password.post');
Route::get('/reset-password/{token}', [ForgetPasswordController::class, 'resetPassword'])->name('reset.password');
Route::post('/reset-password', [ForgetPasswordController::class, 'resetPasswordPost'])->name('reset.password.post');

Route::get('/profile' , [ProfileController::class,'index'])->name('profile.index')->middleware('auth');
Route::get('/create-profile' , [ProfileController::class,'create'])->name('profile.create')->middleware('auth');
