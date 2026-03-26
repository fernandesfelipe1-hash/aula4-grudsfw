<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ecommerce;

Route::get('/teste', function(){
    return view('teste');
});

Route::get('/', [Ecommerce::class, 'index']);
