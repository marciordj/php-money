<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('novo')->group(function () {
    Route::get('/test/{id}', function (string $id) {
        return 'User: '.$id;
    });
    Route::get('/userName', [UserController::class, 'getUser']);
});
