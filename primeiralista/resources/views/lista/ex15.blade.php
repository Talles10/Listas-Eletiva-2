@extends('layout')

@section('conteudo')
<form method="post">
    @csrf
    <div class="mb-3">
        <label for="dias" class="form-label">Insira o numero de dias para conversão</label>
        <input type="number" id="dias" name="dias" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($total)
        <p>O numero de dias convertido em horas é de  {{$horas}}</p>
        <p>O numero de dias convertido em minutos é de {{$min}}</p>
        <p>O numero de dias convertido em segundos é de {{$seg}}</p>
    @endisset
@endsection
