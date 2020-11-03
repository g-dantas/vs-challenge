<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('auth/login', 'Api\AuthController@login');

Route::group(['middleware' => 'apiJWT'], function () {
    Route::post('auth/logout', 'Api\AuthController@logout');

    Route::get('products', 'Api\v1\ProductController@searchProduct');
});
