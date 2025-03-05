<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function () {
    Route::get('/ping', function () {
        return response()->json(['message' => 'Pong!']);
    });

    Route::get('/users', function () {
        return response()->json(['users' => []]);
    });
});
