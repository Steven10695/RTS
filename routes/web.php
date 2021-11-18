<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProformaController;
use App\Http\Controllers\CotizacionController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




// LOS PORTALES
Route::get('/pdf/{id}',  [ProformaController::class, 'generar']);

// RTS
Route::get('/api-rts/pdf/{id}',[CotizacionController::class, 'generarPDF']);

Route::get('/hola', function () {
    return "hola rolando";
});

// Route::get('/api-rts/{id}', function () {
//     $pdf = PDF::loadView('index2');
//     return $pdf->stream('index.pdf');
    return view('cotizacion');
    // return $pdf->stream('index.pdf');
// });

// Route::get('/pdf', function () {
//     $pdf = PDF::loadView('index');
//     return $pdf->download('index.pdf');
// });


    

