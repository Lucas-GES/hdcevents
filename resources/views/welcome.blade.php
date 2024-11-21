<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200..1000;1,200..1000&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

</head>

<body>
        <h1>Algum titulo</h1>
        @if(10 > 20)
            <p>A condição é true</p>
        @endif

        <p>{{ $nome }}</p>

        @if($nome == "Pedro")
        <p>O nome é Pedro</p>
        @elseif($nome == "Luck")
        <p>O nome é {{$nome}} e ele tem {{$idade}} anos, e trabalha como {{$profissao}}</p>
        @else
        <p>O nome não é Pedro</p>
        @endif

        @for($i = 0; $i < count($arr); $i++)
            <p>{{$arr[$i]}} - {{$i}}</p>
            @if($i == 2)
            <p>O indice é 2</p>
            @endif
        @endfor

        @foreach($nomes as $nome)
            <p>{{$loop->index}}</p>
            <p>{{$nome}}</p>
        @endforeach

        @php
            $name = "João";
            echo $name;
        @endphp

        {{-- Este é o comentário do Blade --}}
</body>

</html>