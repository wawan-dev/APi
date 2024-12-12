<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProduitsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produits', [ProduitsController::class, "liste"]);
