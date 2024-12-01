<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProtectedController;
use App\Http\Middleware\StaticToken;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/protected', [ProtectedController::class, 'index'])->middleware(StaticToken::class);;
