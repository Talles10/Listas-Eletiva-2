<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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
Route :: get('/bem vindo', function(){
    return "Seja bem vindo!";
});

Route :: get('/exer1', function(){
    return view('exer1');
});

Route :: post('exer1resp', function(Request $request){
    $valor1 = intval($request -> input('valor1'));
    $valor2 = intval($request -> input('valor2'));
    $soma = $valor1 + $valor2;
    return view('exer1', compact('soma'));
});

Route::get('/ex1',function(){
    return view('lista.ex1');
});

Route::post('/listaex1', function(Request $request){
    $nota1 = floatval($request ->input('nota1'));
    $nota2 = floatval($request ->input('nota2'));
    $nota3 = floatval($request ->input('nota3'));
    $media = ($nota1 + $nota2 + $nota3) / 3;
    return view('lista.ex1', compact('media'));
});
Route::get('/ex2',function(){
    return view('lista.ex2');
});

Route::post('/listaex2', function(Request $request){
    $temp = floatval($request ->input('temp'));
    $convertida = $temp + 32;
    return view('lista.ex2', compact('convertida'));
});

Route::get('/ex3',function(){
    return view('lista.ex3');
});

Route::post('/listaex3', function(Request $request){
    $temp = floatval($request ->input('temp'));
    $convertida = $temp - 32;
    return view('lista.ex3', compact('convertida'));
});

Route::get('/ex4', function(){
    return view('lista.ex4');
});

Route::post('listaex4', function(Request $request){
    $base_tri = floatval($request ->input('base'));
    $altura_tri = floatval($request ->input('altura'));
    $area = ($base_tri * $altura_tri) / 2;
    return view('lista.ex4', compact('area'));
});

Route::get('/ex5', function(){
    return view('lista.ex5');
});
Route::post('listaex5', function(Request $request){
    $raio = floatval($request -> input('raio'));
    $area = $raio ** 2 * 3.14;
    return view('lista.ex5', compact('area'));
});

Route::get('/ex6', function(){
    return view('lista.ex6');
});

Route::post('listaex6',function(Request $request){
    $largura = floatval($request ->input('largura'));
    $altura = floatval($request ->input('altura'));
    $perimetro = ($largura * 2) + ($altura * 2);
    return view('lista.ex6', compact('perimetro'));
});

Route::get('/ex7', function(){
    return view('lista.ex7');
});

Route::post('listaex7', function(Request $request){
    $raio = floatval($request -> input('raio'));
    $perimetro = 2 * 3.14 * $raio;
    return view('lista.ex7', compact('perimetro'));
});
