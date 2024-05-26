<?php

use App\Http\Controllers\API\PatientController;
use App\Http\Controllers\API\TensimeterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('tensimeter', TensimeterController::class)->only(['store']);
Route::apiResource('patient', PatientController::class)->only(['show', 'update']);