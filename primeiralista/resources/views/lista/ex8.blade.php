@extends('layout')

@section('conteudo')
<form method="post" action="listaex8">
    @csrf
    <div class="mb-3">
        <label for="base" class="form-label">Preencha o valor da base</label>
        <input type="number" id="base" name="base" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="expoente" class="form-label">Preencha o valor do expoente</label>
        <input type="number" id="expoente" name="expoente" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($total)
<p>O valor total {{$total}}</p>
@endisset
@endsection