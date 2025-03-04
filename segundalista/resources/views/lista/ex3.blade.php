<form method="post" action="listaex3">
    @csrf
    <div class="mb-3">
        <label for="valor" class="form-label">Insira o valor do produto a ser vendido</label>
        <input type="number" id="valor" name="valor" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($valor)
    <p>O valor informado é de : {{$valor}}</p>
@endisset
@isset($valordesc)
    <p>O valor com o desconto é de {{$valordesc}} </p>
@endisset
