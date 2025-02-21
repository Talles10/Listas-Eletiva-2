@extends('layout')

@section('conteudo')

<form method="post" action = 'listaex10'>
    @csrf
    <div class="mb-3">
        <label for="km" class="form-label">Insira um valor em KM(Apenas numeros)</label>
        <input type="number" id="km" name="km" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($convertido)
<p>O valor convertido é de  {{$convertido}}</p>
@endisset
@endsection