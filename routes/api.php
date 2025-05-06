<?php
// Definir las rutas para los productos
use App\Http\Controllers\ProductoController;

// Definir las rutas para los productos
Route::apiResource('/productos', ProductoController::class);
