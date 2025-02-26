<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function exer1(){
        return view('lista.ex1');
    }
    public function respex1(Request $request){
        $n1 = floatval($request -> input('n1'));
        $n2 = floatval($request -> input('n2'));
        $soma = $n1 + $n2;
        if($n1 == $n2){
            $total = $soma * 3;
            return view('lista.ex1', compact('total'));
        }
        else{
        return view('lista.ex1', compact('soma'));
    }}
    public function exer2(){
        return view('lista.ex2');
    }
    public function exer3(){
        return view('lista.ex3');
    }
    public function exer4(){
        return view('lista.ex4');
    }
    public function exer5(){
        return view('lista.ex5');
    }
    public function exer6(){
        return view('lista.ex6');
    }
    public function exer7(){
        return view('lista.ex7');
    }
    public function exer8(){
        return view('lista.ex8');
    }
    public function exer9(){
        return view('lista.ex9');
    }
    public function exer10(){
        return view('lista.ex10');  
    }
}