<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitsController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/produits', [ProduitsController::class, "liste"]);

Route::get('/produits/{id}', [ProduitsController::class, "detail"]);

Route::post('/produits', [ProduitsController::class, "ajouter"]);