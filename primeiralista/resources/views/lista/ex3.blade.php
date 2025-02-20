@extends('layout')

@section('conteudo')
<form method="post" action="listaex3">
    @csrf
    <div class="mb-3">
        <label for="temp" class="form-label">Informe a temperatura em fahrenheit </label>
        <input type="number" id="temp" name="temp" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    @isset($convertida)
        <p>A temperatura convertida de fahrenheit pra Celcius é {{$convertida}}</p>
    @endisset
@endsection