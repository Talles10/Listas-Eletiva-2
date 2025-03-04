<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Console\Input\Input;

class ExerciciosController extends Controller
{
    public function exer1(){
        return view('lista.ex1');
    }
    public function respex1(Request $request){
        $n1 = floatval($request->input('n1'));
        $n2 = floatval($request->input('n2'));
        $soma = $n1 + $n2;

        if ($n1 == $n2) {
            $total = $soma * 3;
            return view('lista.ex1', compact('total'));
        }

        return view('lista.ex1', compact('soma'));
    }
    public function respex2(Request $request){
        $a = floatval($request->input('n1'));
        $b = floatval($request->input('n2'));

        if ($a == $b) {
            $valoresiguais = $a;
            return view('lista.ex2', compact('valoresiguais'));
        }

        $valores = [$a, $b];
        sort($valores);

        return view('lista.ex2', compact('valores'));
    }

    public function exer3(){
        return view('lista.ex3');
    }
    public function respex3(Request $request){
        $valor = floatval($request -> input('valor'));
        if($valor > 100){
            $desconto = $valor * 0.15;
            $valordesc = $valor - $desconto;
            return view('lista.ex3', compact('valordesc'));
        }
        return view('lista.ex3', compact('valor'));
    }
    public function exer4(){
        return view('lista.ex4');
    }

    public function respex4(Request $request){
        $limite = intval($request->input('num'));

        function primo($num) {
            if ($num < 2) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
                if ($num % $i == 0) return false;
            }
            return true;
        }
        $primos = [];
        for ($i = 1; $i <= $limite; $i++) {
            if (primo($i)) {
                $primos[] = $i;
            }
        } return view('lista.ex4', compact('primos', 'limite'));
    }
    public function exer5(){
        return view('lista.ex5');
    }
    public function respex5(Request $request){
        $mes = intval($request->input('num'));
        $resp = "";

        switch($mes){
            case 1:  $resp = 'Você escolheu Janeiro'; break;
            case 2:  $resp = 'Você escolheu Fevereiro'; break;
            case 3:  $resp = 'Você escolheu Março'; break;
            case 4:  $resp = 'Você escolheu Abril'; break;
            case 5:  $resp = 'Você escolheu Maio'; break;
            case 6:  $resp = 'Você escolheu Junho'; break;
            case 7:  $resp = 'Você escolheu Julho'; break;
            case 8:  $resp = 'Você escolheu Agosto'; break;
            case 9:  $resp = 'Você escolheu Setembro'; break;
            case 10: $resp = 'Você escolheu Outubro'; break;
            case 11: $resp = 'Você escolheu Novembro'; break;
            case 12: $resp = 'Você escolheu Dezembro'; break;
            default:
                $resp = "Erro: Digite um número entre 1 e 12.";
        }

        return view('lista.ex5', compact('resp'));
    }
    public function exer6(){
        return view('lista.ex6');
    }
    public function respex6(Request $request){
        $valor = intval($request->input('num'));
        $antes = [];

        for ($i = 0; $i < $valor; $i++) {
            $antes[] = $i;
        }
        return view('lista.ex6', compact('valor', 'antes'));
    }
    public function exer7(){
        return view('lista.ex7');
    }
    public function respex7(Request $request){
        $valor = intval($request->input('num'));
        $valores_a_serem_somados = [];
        for ($i = 0; $i < $valor; $i++) {
            $valores_a_serem_somados[] = $i;
            while($valores_a_serem_somados < $valor);
                $soma = array_sum($valores_a_serem_somados);
        }
        return view('lista.ex7', compact('soma'));
}
    public function exer8(){
        return view('lista.ex8');
    }
    public function respex8(Request $request){
        $valor = intval($request->input('num'));
        $valores_subtraidos = [];
        do {
            $valores_subtraidos[] = $valor;
            $valor--;
        } while ($valor >= 1);

        return view('lista.ex8', compact('valores_subtraidos'));
    }

    public function exer9(){
        return view('lista.ex9');
    }
    public function respex9(Request $request){
        $valor = intval($request->input('num'));
        $fatorial = 1;
        for($i = $valor; $i > 1;$i--){
            $fatorial *= $i;
        }
        return view('lista.ex9', compact('fatorial'));
    }
    public function exer10(){
        return view('lista.ex10');
    }
    public function respex10(Request $request){
        $valor = intval($request->input('num'));
        $tabuada = [];
        for ($i = 1; $i <= 10; $i++) {
            $tabuada[] = "$valor x $i = " . ($valor * $i);
        }
        return view('lista.ex10', compact('tabuada'));
    }
}
