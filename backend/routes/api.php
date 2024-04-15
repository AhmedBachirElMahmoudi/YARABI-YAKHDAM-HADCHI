<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\ApiController;

Route::post('/login', [ApiController::class, 'Login']);
Route::post('/register', [ApiController::class, 'Register']);

//Route::get('/user', function (Request $request) {
 //   return $request->user();
//})->middleware('auth:sanctum');
//
