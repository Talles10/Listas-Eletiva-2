<form method="post" action="listaex6">
    @csrf
    <div class="mb-3">
        <label for="num" class="form-label">Digite um numero inteiro</label>
        <input type="number" id="num" name="num" class="form-control" required="">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@if(isset($valor))
    <p>Os valores anteriores ao número {{$valor}} são:</p>
    <ul>
        @foreach($antes as $num)
            <li>{{$num}}</li>
        @endforeach
    </ul>
@endif
