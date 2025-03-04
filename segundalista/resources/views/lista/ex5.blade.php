<form method="post" action="listaex5">
    @csrf
    <div class="mb-3">
        <label for="num" class="form-label">Digite um numero inteiro</label>
        <input type="number" id="num" name="num" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($resp)
    <p>{{$resp}}</p>
@endisset
