<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PostController;

Route::get('/',[MainController::class,'index']);

Route::get('/post/{id}', [PostController::class,'show'])->name('post.show');

Route::get('api', [ApiController::class,'data']);