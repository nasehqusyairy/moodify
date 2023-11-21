<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\MusicController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::apiResource('categories', CategoryController::class);
