@extends('layout')

@section('conteudo')

<form method="post" action="listaex9">
    @csrf
    <div class="mb-3">
        <label for="metro" class="form-label">Insira um valor em metros (Apenas números)</label>
        <input type="number" id="metro" name="metro" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    @isset($convertida)
        <p>O valor convertido em CM é {{$convertida}}</p>
    @endisset
@endsection