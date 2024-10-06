<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ConversionController;

Route::get('/length',[ConversionController::class,'length'])->name('length');
Route::post('/length',[ConversionController::class,'ConvertLength']);

Route::get('/weight', [ConversionController::class, 'weight'])->name('weight');
Route::post('/weight', [ConversionController::class, 'convertWeight']);

Route::get('/temperature', [ConversionController::class, 'temperature'])->name('temperature');
Route::post('/temperature', [ConversionController::class, 'convertTemperature']);





