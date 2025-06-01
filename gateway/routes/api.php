<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;


Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:api')->get('/products', function (Request $request) {
    $token = $request->bearerToken(); // ✅ This works

    $response = Http::withToken($token)
        ->get('http://product_service:8000/api/products');

    return $response->json();
});
