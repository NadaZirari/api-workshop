<?php

use Illuminate\Http\Request;
use Illuminate\Http\ProductController;
use Illuminate\Support\Facades\Route;

Route::apiResource('products', ProductController::class);