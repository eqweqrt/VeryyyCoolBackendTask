<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user/store', function (Request $request) {
    return $request->user();
});

Route::get('/user/{user}', function (Request $request) {
    return $request->user();
});
