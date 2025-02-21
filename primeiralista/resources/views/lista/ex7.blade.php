@extends('layout')

@section('conteudo')
<form method="post" action="listaex7">
    @csrf
    <div class="mb-3">
        <label for="raio" class="form-label">Insira o raio da circunferência</label>
        <input type="number" id="raio" name="raio" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($perimetro)
    <p>A area da circunferencia é {{$perimetro}}</p>
@endisset
@endsection
