<?php

use App\Http\Controllers\DoctorControllers\DashboardController;
use App\Http\Controllers\DoctorControllers\DoctorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route("login");
});

Auth::routes();


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('doctor.dashboard');
    
    Route::resource('/doctors', DoctorController::class);

});