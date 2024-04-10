<?php

use App\Http\Controllers\crudcontroller;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get("/", [crudcontroller::class,"index_Principal"])->name("crud.index_Principal");
Route::get("/añadir-profe", [crudcontroller::class,"index_Registrar_Profesor"])->name("crud.index_Registrar_Profesor");
Route::get("/añadir-asignacion-profe", [crudcontroller::class,"index_Asignacion_Profesor"])->name("crud.index_Asignacion_Profesor");
Route::get("/añadir-asignacion-est", [crudcontroller::class,"index_Asignacion_Estudiante"])->name("crud.index_Asignacion_Estudiante");

//ruta para añadir un estudiante
Route::post("/registrar-estudiante", [crudcontroller::class,"create_Estudiante"])->name("crud.create_Estudiante");

//ruta para añadir un profesor
Route::post("/registrar-profesor", [crudcontroller::class,"create_Profesor"])->name("crud.create_Profesor");

//ruta para añadir una asignacion al profesor
Route::post("/registrar-asigancion-profesor", [crudcontroller::class,"create_Asignacion_Estudiante"])->name("crud.create_Asignacion_Estudiante");

//ruta para añadir una asigancion al estudiante
Route::post("/registrar-asigancion-estudiante", [crudcontroller::class,"create_Asignacion_Profesor"])->name("crud.create_Asignacion_Profesor");


//ruta para modificar estudiante
Route::post("/modificar-estudiante", [crudcontroller::class,"update_Estudiante"])->name("crud.update_Estudiante");

//ruta para modificar profesor
Route::post("/modificar-profesor", [crudcontroller::class,"update_Profesor"])->name("crud.update_Profesor");

//ruta para modificar asignacion estudiante
Route::post("/modificar-asignacion'estudiante", [crudcontroller::class,"update_Asignacion_Estudiante"])->name("crud.update_Asignacion_Estudiante");

// ruta para modificar asignacion profesor
Route::post("/modificar-asignacion'profesor", [crudcontroller::class,"update_Asignacion_Profesor"])->name("crud.update_Asignacion_Profesor");



//ruta para eliminar estudiante
Route::get("/eliminar-estudiante-{id}", [crudcontroller::class,"delete_Estudiante"])->name("crud.delete_Estudiante");

//ruta para eliminar profesor
Route::get("/eliminar-profesor-{id}", [crudcontroller::class,"delete_Profesor"])->name("crud.delete_Profesor");

//ruta para eliminar asignacion profesor
Route::get("/eliminar-asignacion-profesor-{id}", [crudcontroller::class,"delete_Asignacion_Profesor"])->name("crud.delete_Asignacion_Profesor");

//ruta para eliminar asignacion estudiante
Route::get("/eliminar-asignacion-estudiante-{id}", [crudcontroller::class,"delete_Asignacion_Estudiante"])->name("crud.delete_Asignacion_Estudiante");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
