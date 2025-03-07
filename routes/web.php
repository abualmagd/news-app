<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ApiController;



Route::get('/',[MainController::class,'index']);

Route::get('api', [ApiController::class,'data']);