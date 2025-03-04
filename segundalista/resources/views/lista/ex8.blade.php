<form method="post" action="listaex8">
    @csrf
    <div class="mb-3">
        <label for="num" class="form-label">Digite um número inteiro</label>
        <input type="number" id="num" name="num" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

@isset($valores_subtraidos)
    <p>Contagem regressiva:</p>
    <ul>
        @foreach ($valores_subtraidos as $numero)
            <li>{{ $numero }}</li>
        @endforeach
    </ul>
@endisset
