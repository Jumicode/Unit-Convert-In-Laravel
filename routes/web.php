<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\ConversionController;

Route::get('/length',[ConversionController::class,'length'])->name('length');
Route::post('/length',[ConversionController::class,'ConvertLength']);

Route::get('/weigth',[ConversionController::class, 'weigth'])->name('weigth');
Route::post('/weight', [ConversionController::class, 'convertWeight']);

Route::get('/temperature', [ConversionController::class, 'temperature'])->name('temperature');
Route::post('/temperature', [ConversionController::class, 'convertTemperature']);





