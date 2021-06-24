<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$titulo}}</title>
</head>
<body>

    <p>{{$texto}}</p>
    <p>{{rand(1,100)}}</p>
    <a href="{{route('minha_route')}}">Link</a>
    <br />
    @php
        $nome = "Thomaz";
        echo "O meu nome é $nome";
    @endphp

</body>
</html>
