<?php

use App\Http\Controllers\MedicalConsultationController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [MedicalConsultationController::class, 'index'])->name('consultation.index');
Route::post('/analyze', [MedicalConsultationController::class, 'analyze'])->name('consultation.analyze');
