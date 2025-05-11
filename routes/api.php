<?php
// Definir las rutas para los productos
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductoController;

// Definir las rutas para la autenticación
Route::post('/login', [AuthController::class, 'login']);

// Definir las rutas para los productos
Route::middleware('auth:sanctum')->group(function () {
    //Cerrar sesión
    Route::post('/logout', [AuthController::class, 'logout']);
   //Ruta de productos
    Route::apiResource('/productos', ProductoController::class);
   //Otras rutas

});

