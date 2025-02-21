
@extends('layout')

@section('conteudo')
<form method="post" action="listaex5">
        @csrf
    <div class="mb-3">
        <label for="raio" class="form-label">Insira o Raio da Circunferência</label>
        <input type="number" id="raio" name="raio" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($area)
    <p>A area da circunferencia é {{$area}}</p>
@endisset
@endsection
