<form method="post" action="listaex10">
    @csrf
    <div class="mb-3">
        <label for="num" class="form-label">Digite um número inteiro</label>
        <input type="number" id="num" name="num" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@isset($tabuada)
    <h3>Tabuada:</h3>
    <ul>
        @foreach($tabuada as $linha)
            <li>{{ $linha }}</li>
        @endforeach
    </ul>
@endisset
