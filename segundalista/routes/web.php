<?php
use App\Http\Controllers\ExerciciosController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('welcome');
});

Route::get('/ex1', [ExerciciosController::class, 'exer1']);
Route::post('/listaex1', [ExerciciosController::class, 'respex1']);

Route::get('/ex2', [ExerciciosController::class, 'exer2']);
Route::post('/listaex2', [ExerciciosController::class, 'respex2']);

Route::get('/ex3', [ExerciciosController::class, 'exer3']);
Route::post('/listaex3', [ExerciciosController::class, 'respex3']);

Route::get('/ex4', [ExerciciosController::class, 'exer4']);
Route::post('/listaex4',[ExerciciosController::class,'respex4']);

Route::get('/ex5',[ExerciciosController::class,'exer5']);
Route::post('/listaex5',[ExerciciosController::class,'respex5']);

Route::get('/ex6',[ExerciciosController::class,'exer6']);
Route::post('/listaex6',[ExerciciosController::class,'respex6']);

Route::get('/ex7', [ExerciciosController::class,'exer7']);
Route::post('/listaex7',[ExerciciosController::class,'respex7']);

Route::get('/ex8',[ExerciciosController::class,'exer8']);
Route::post('/listaex8',[ExerciciosController::class,'respex8']);

Route::get('/ex9',[ExerciciosController::class,'exer9']);
Route::post('/listaex9',[ExerciciosController::class,'respex9']);

Route::get('/ex10',[ExerciciosController::class,'exer10']);
Route::post('/listaex10',[ExerciciosController::class,'respex10']);


