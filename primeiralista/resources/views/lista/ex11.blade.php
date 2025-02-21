@extends('layout')

@section('conteudo')
<form method="post" action="listaex11">
    @csrf
    <div class="mb-3">
        <label for="peso" class="form-label">Insira seu peso em kg(Apenas numeros)</label>
        <input type="number" id="peso" name="peso" class="form-control" step="0.01" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Insira sua altura em metros(Apenas numeros)</label>
        <input type="number" id="altura" name="altura" class="form-control" step="0.01" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    @isset($IMC)
        <p>O valor calculado do seu IMC é {{$IMC}}</p>
    @endisset
@endsection