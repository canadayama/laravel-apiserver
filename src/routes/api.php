<?php

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/users', function (Request $request) {
    return response()->json([
        'data' => 'bbbb'
    ]);
});

Route::get('/users/{user}', function (User $user) {
    return response()->json([
        'data' => $user
    ]);
});

Route::post('/users', function () {
    return response()->json([
        'data' => 'post'
    ]);
});

Route::patch('/users/{user}', function (User $user) {
    return response()->json([
        'data' => 'patch'
    ]);
});

Route::delete('/users/{user}', function (User $user) {
    return response()->json([
        'data' => 'delete'
    ]);
});