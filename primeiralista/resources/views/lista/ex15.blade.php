@extends('layout')

@section('conteudo')
<form method="post" action="listaex15">
    @csrf
    <div class="mb-3">
        <label for="dias" class="form-label">Insira o numero de dias para conversão</label>
        <input type="number" id="dias" name="dias" class="form-control" required="">
    </div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($dias)
        <p>Numero digitado {{$dias}} dias</p>
@endisset
@isset($horas)
        <p>O numero de dias convertido em horas é de  {{$horas}} h</p>
@endisset
@isset($min)
        <p>O numero de dias convertido em minutos é de {{$min}} m</p>
@endisset
@isset($seg)
        <p>O numero de dias convertido em segundos é de {{$seg}} s</p>
@endisset
@endsection
