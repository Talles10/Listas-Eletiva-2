@extends('layout')

@section('conteudo')

<form method="post" action="listaex14">
    @csrf
    <div class="mb-3">
        <label for="cap" class="form-label">Insira o valor do capital </label>
        <input type="number" id="cap" name="cap" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="taxa" class="form-label">Insira o valor da taxa</label>
        <input type="number" id="taxa" name="taxa" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="per" class="form-label">Informe o período em meses</label>
        <input type="number" id="per" name="per" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($montante)
    <p>O valor do montante calculado é de {{$montante}} reais</p>
@endisset
@isset($juros)
    <p>O valor do juros calculado é de {{$juros}} reais</p>
@endisset
@endsection
