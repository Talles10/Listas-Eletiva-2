
<form method="post" action="listaex1">
    @csrf
    <div class="mb-3">
        <label for="nota1" class="form-label">Digite o primeiro valor</label>
        <input type="number" id="n1" name="n1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="nota2" class="form-label">Digite o segundo valor</label>
        <input type="number" id="n2" name="n2" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
    @isset($total)
    <p> O total é {{$total}}</p>
    @endisset
    @isset($soma)
    <p> O total é {{$soma}}</p>
    @endisset
