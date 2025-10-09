<?php

use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/patients', [PatientController::class, 'index'])->name('patients.index');

Route::get('/patients/ajouter', [PatientController::class, 'add_patient'])->name('patients.add');
Route::post('/patients/ajouter', [PatientController::class, 'store'])->name('patients.store');
