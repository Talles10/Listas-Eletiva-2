@extends('layout')

@section('conteudo')
<form method="post" action = "listaex4">
    @csrf         
<div class="mb-3" >
    <label for="base" class="form-label">Base do triangulo</label>
    <input type="number" id="base" name="base" class="form-control" required="">
</div>

<div class="mb-3">
    <label for="Altura" class="form-label">Altura do triangulo</label>
    <input type="number" id="altura" name="altura" class="form-control" required="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($area)
        <p>A area do triangulo de acordo com os valores informados é de {{$area}}</p>
    @endisset
@endsection
            