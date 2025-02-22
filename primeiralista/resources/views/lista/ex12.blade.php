@extends('layout')

@section('conteudo')
<form method="post" action = 'listaex12'>
    @csrf
                        
<div class="mb-3">
    <label for="preco" class="form-label">Insira o valor que será determinado o preço </label>
    <input type="number" id="preco" name="preco" class="form-control" required="">
</div>

<div class="mb-3">
    <label for="desc" class="form-label">Insira o valor que será determinado o desconto </label>
    <input type="number" id="desc" name="desc" class="form-control" required="">
</div>

<button type="submit" class="btn btn-primary">Enviar</button>
</form>
    @isset($total)
        <p>O valor calculado do seu produto com desconto é {{$total}}</p>
    @endisset
@endsection