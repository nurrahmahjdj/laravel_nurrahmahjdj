<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\HospitalController;

Route::get('/', [AuthController::class, 'showFormLogin'])->name('showFormLogin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth')->group(function(){
    Route::get('/hospitals', [HospitalController::class, 'index'])->name('hospitals');
    Route::post('/hospitals/store', [HospitalController::class, 'store'])->name('hospitals.store');
    Route::delete('/hospitals/{id}', [HospitalController::class, 'destroy'])->name('hospitals.destroy');

    Route::get('/patients', [PatientController::class, 'index'])->name('patients');
    Route::post('/patients/store', [PatientController::class, 'store'])->name('patients.store');
    Route::delete('/patients/{id}', [PatientController::class, 'destroy'])->name('patients.destroy');
});
