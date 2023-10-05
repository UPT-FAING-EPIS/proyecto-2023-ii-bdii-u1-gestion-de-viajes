<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//
use App\Models\Destino;
use App\Models\Viaje;
use App\Models\DetalleViaje;
use App\Models\CostoDetalle;



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

//--------------------------------Destinos-------------------------------------------//

//Obtener una lista de registros
Route::get('destinos', function () {
    return Destino::all();
});

//Obtener un solo registro
Route::get('destinos/{id}', function ($id) {
    return Destino::find($id);
});

//Crear un nuevo registro
Route::post('destinos', function (Request $request) {
    return Destino::create($request->all());
});

//Actualizar registros
Route::put('destinos/{id}', function (Request $request, $id) {
    $destino = Destino::findOrFail($id);
    $destino->update($request->all());
    return $destino;
});

//Eliminar registros
Route::delete('destinos/{id}', function ($id) {
    Destino::find($id)->delete();
    return 204; //Retorna el codigo http 204
});



//--------------------------------Viajes-------------------------------------------//

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
//--------------------------------DetalleViajes-------------------------------------------//

//Obtener una lista de registros
Route::get('detalleViajes', function () {
    return DetalleViaje::all();
});

//Obtener un solo registro
Route::get('detalleViajes/{id}', function ($id) {
    return DetalleViaje::find($id);
});

//Crear un nuevo registro
Route::post('detalleViajes', function (Request $request) {
    return DetalleViaje::create($request->all());
});

//Actualizar registros
Route::put('detalleViajes/{id}', function (Request $request, $id) {
    $detalle_viaje = DetalleViaje::findOrFail($id);
    $detalle_viaje->update($request->all());
    return $detalle_viaje;
});

//Eliminar registros
Route::delete('detalleViajes/{id}', function ($id) {
    DetalleViaje::find($id)->delete();
    return 204; //Retorna el codigo http 204
});



//--------------------------------CostosDetalles-------------------------------------------//
//Obtener una lista de registros
Route::get('costosDetalles', function () {
    return CostoDetalle::all();
});

//Obtener un solo registro
Route::get('costosDetalles/{id}', function ($id) {
    return CostoDetalle::find($id);
});

//Crear un nuevo registro
Route::post('costosDetalles', function (Request $request) {
    return CostoDetalle::create($request->all());
});

//Actualizar registros
Route::put('costosDetalles/{id}', function (Request $request, $id) {
    $costo_detalle = CostoDetalle::findOrFail($id);
    $costo_detalle->update($request->all());
    return $costo_detalle;
});

//Eliminar registros
Route::delete('costosDetalles/{id}', function ($id) {
    CostoDetalle::find($id)->delete();
    return 204; //Retorna el codigo http 204
});
