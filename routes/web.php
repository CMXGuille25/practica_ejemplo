<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CorreoController;

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

Route::get('/', function () {
    return view('welcome');

});



//Route::get('/enviar-correo', 'app\Http\Controllers\CorreoController@enviarCorreo');
Route::get('/enviar-correo',  [ CorreoController::class, 'enviarCorreo']);




