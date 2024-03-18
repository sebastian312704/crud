<?php

use App\Http\Controllers\crudcontroller;
use Illuminate\Support\Facades\Route;

Route::get("/", [crudcontroller::class,"index"])->name("crud.index");
Route::get("/añadir-profe", [crudcontroller::class,"index1"])->name("crud.index1");

//ruta para añadir un estudiante
Route::post("/registrar-estudiante", [crudcontroller::class,"create"])->name("crud.create");
//ruta para añadir un profesor
Route::post("/registrar-profesor", [crudcontroller::class,"create1"])->name("crud.create1");


//ruta para modificar estudiante
Route::post("/modificar-estudiante", [crudcontroller::class,"update"])->name("crud.update");
//ruta para modificar profesor
Route::post("/modificar-profesor", [crudcontroller::class,"update1"])->name("crud.update1");


//ruta para eliminar estudiante
Route::get("/eliminar-estudiante-{id}", [crudcontroller::class,"delete"])->name("crud.delete");
//ruta para eliminar profesor
Route::get("/eliminar-profesor-{id}", [crudcontroller::class,"delete1"])->name("crud.delete1");