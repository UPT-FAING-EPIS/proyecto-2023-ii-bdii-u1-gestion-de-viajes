<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//
use App\Models\Viaje;


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


/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/


//Viajes

//Obtener una lista de registros
Route::get('viajes', function () {
    return Viaje::all();
});

//Obtener un solo registro
Route::get('viajes/{id}', function ($id) {
    return Viaje::find($id);
});

//Crear un nuevo registro
Route::post('viajes', function (Request $request) {
    return Viaje::create($request->all());
});

//Actualizar registros
Route::put('viajes/{id}', function (Request $request, $id) {
    $viaje = Viaje::findOrFail($id);
    $viaje->update($request->all());
    return $viaje;
});

//Eliminar registros
Route::delete('viajes/{id}', function ($id) {
    Viaje::find($id)->delete();
    return 204; //Retorna el codigo http 204
});
