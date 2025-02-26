<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

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

Route::get('/ex1', [ExerciciosController::class, "exer1"]);

Route::post('/listaex1', [ExerciciosController::class, "respex1"]);
