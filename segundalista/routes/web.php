<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
=======
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
>>>>>>> fae381b1f1282d56b8e2db036de8135d03b0a7df

Route::get('/', function () {
    return view('welcome');
});
<<<<<<< HEAD
=======

Route::get('/ex1', [ExerciciosController::class, "exer1"]);

Route::post('/listaex1', [ExerciciosController::class, "respex1"]);
>>>>>>> fae381b1f1282d56b8e2db036de8135d03b0a7df
