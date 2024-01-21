<?php

use App\Http\Controllers\BodegaController;
use App\Http\Controllers\VinoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Rutas para las bodegas
Route::get("/", function(){
    redirect(route("bodegas.index"));
});
Route::get("/bodegas", [BodegaController::class, "index"])->name("bodegas.index");
Route::get("/bodegas/create", [BodegaController::class, "create"])->name("bodegas.create");
Route::post("/bodegas", [BodegaController::class, "store"])->name("bodegas.store");
Route::get('/bodegas/{bodega}', [BodegaController::class, "show"])->name("bodegas.show");
Route::delete('/bodegas/{bodega}', [BodegaController::class, "destroy"])->name("bodegas.destroy");
Route::get('/bodegas/{bodega}/edit', [BodegaController::class, "edit"])->name("bodegas.edit");
Route::put('/bodegas/{bodega}', [BodegaController::class, "update"])->name("bodegas.update");

//Rutas para los vinos

Route::get("/bodegas/{bodega}/vinos/create", [VinoController::class, "create"])->name("vinos.create");
Route::post("/bodegas/{bodega}/vinos", [VinoController::class, "store"])->name("vinos.store");
Route::get("/bodegas/{bodega}/vinos/{vino}", [VinoController::class, "show"])->name("vinos.show");
Route::delete('/bodegas/{bodega}/vinos/{vino}', [VinoController::class, "destroy"])->name("vinos.destroy");
Route::get("/bodegas/{bodega}/vinos/{vino}/edit", [VinoController::class, "edit"])->name("vinos.edit");
Route::put('/bodegas/{bodega}/vinos/{vino}', [VinoController::class, "update"])->name("vinos.update");





