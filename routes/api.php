<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CourseController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\librosController;
use App\Http\Controllers\Api\PrestamoController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::apiResources([
    'usuarios' => UserController::class,
]);

Route::get('prestamo/GetDataById/{id}', [PrestamoController::class, 'GetDataById']);
Route::post('prestamo/store', [PrestamoController::class, 'store']);
Route::post('prestamo/delete', [PrestamoController::class, 'delete']);
Route::post('prestamo/edit', [PrestamoController::class, 'edit']);
Route::post('prestamo/update', [PrestamoController::class, 'update']);
Route::get('prestamos', [PrestamoController::class, 'index']);


Route::post('libro/store', [librosController::class, 'store']);
Route::post('libro/delete', [librosController::class, 'delete']);
Route::post('libro/edit', [librosController::class, 'edit']);
Route::post('libro/update', [librosController::class, 'update']);
Route::get('libros', [librosController::class, 'index']);



Route::post('usuario/store', [UserController::class, 'store']);
Route::post('usuario/delete', [UserController::class, 'delete']);
Route::post('usuario/edit', [UserController::class, 'edit']);
Route::post('usuario/update', [UserController::class, 'update']);

Route::post('login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResources([
    'categories' => CategoryController::class,
    'courses' => CourseController::class,
]);