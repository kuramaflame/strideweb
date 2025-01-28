<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\IndexController;


Route::get('/', [IndexController::class, 'show']);
Route::get('/create', [ListingController::class, 'show']);