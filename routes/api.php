<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Public

Route::get('/products',[ProductController::class,'index']);
