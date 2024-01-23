<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CardController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/cards', [CardController::class, 'index']);
Route::get('/cards/{id}', [CardController::class, 'show']);
Route::post('/cards', [CardController::class, 'store']);