<?php

use App\Http\Controllers\Api\PrestaireController;
use App\Http\Controllers\Api\CategorieController;

Route::apiResource('prestataires', PrestaireController::class);
Route::apiResource('categories', CategorieController::class);