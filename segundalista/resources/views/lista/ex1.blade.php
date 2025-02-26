{{--Lista de Exercícios 2
1. Escreva um programa para calcular a soma dos dois valores de entrada. Se
os dois valores forem iguais, retorne o triplo da soma.
2. Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem
crescente em relação aos seus valores. Caso os valores sejam iguais,
informar o usuário e imprimir o valor em tela apenas uma vez.
Exemplo, para A=5, B=4 você deve imprimir na tela: "4 5".
para A=5, B=5 você deve imprimir na tela: “Números iguais: 5”.
3. Faça um programa em PHP onde o valor de um produto é informado. Se
esse valor for superior a R$100,00 deve ser aplicado um desconto de 15%
sobre ele e exibido o novo valor do produto.
4. Faça um programa para ler um valor e calcular os números primos de 1 até
o valor informado.
5. Faça um programa que leia o valor associado a um mês. Exemplo: 1 –
Janeiro, 2 – Fevereiro... Exiba o nome do mês associado = USE SWITCH
6. Crie um formulário para que o usuário informe um número. Use um loop
for para imprimir todos os números de 1 até o número informado.
7. Crie um formulário para que o usuário informe um número. Use um loop
while para somar todos os números de 1 até o número informado e exibir o
resultado.
8. Crie um formulário para que o usuário informe um número. Use um loop
do-while para exibir uma contagem regressiva a partir do número
informado até 1.
9. Crie um formulário para que o usuário informe um número. Use um loop
for para calcular o fatorial desse número e exibir o resultado.
10.Crie um formulário para que o usuário informe um número. Use um loop
for para imprimir a tabuada desse número de 1 a 10.--}}



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