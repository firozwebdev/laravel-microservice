<?php

use Illuminate\Support\Facades\Http;

// $response = Http::get('http://product-service:8000/api/products');
// return $response->json();

Route::get('/products', function () {
    $response = Http::get('http://product-service:8000/api/products');
    return $response->json();
});