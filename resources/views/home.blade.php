<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <!-- @if($valor == 100)
        igual a 100.
    @elseif($valor < 100)
        menor que 100.
    @else
        maior que 100.
    @endif -->

    <!-- @unless ($valor < 100)
        teste
    @endunless -->

    <!-- <?php
            if (isset($valor)) {
                echo "sim, existe";
            }
            ?> -->

    <!-- @isset($valor)
        sim, existe
    @endisset -->

    <!-- @empty($nome)
        Está vazia
    @endempty -->

    <!-- @switch($valor)
        @case(100)
            Igual à 100
            @break

        @case(10)
            Igual à 10
            @break

        @default
            Outro valor
    @endswitch -->

    <!-- @for ($i = 0; $i < 10; $i++)
        <p>Valor: {{ $i }}</p>
    @endfor -->

    <!-- <ul>
    @foreach ($nomes as $nome)
        <li>{{ $nome }}</li>
    @endforeach
    </ul> -->

    <!-- @forelse ($nomes as $nome)
        <p>{{ $nome }}</p>
    @empty
        <p>Não existem nomes</p>
    @endforelse -->


    <!-- @while ($valor >= 50)
        <p>Valor: {{$valor--}}</p>
    @endwhile -->


    <!-- @foreach ($nomes as $nome)

        @if ($loop->first)
            {{$nome}}
        @endif

        @if ($loop->last)
            {{$nome}}
        @endif

    @endforeach -->

</body>

</html>
