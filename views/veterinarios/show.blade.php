<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar de Veterinários</title>
</head>
<body>
    <a href="{{route('clientes.index')}}">Voltar</a>
    <br>
    <label>ID: </label>{{$dados['id']}}
    <br>
    <label>CRMV: </label>{{$dados['CRMV']}}
    <br>
    <label>Nome: </label>{{$dados['nome']}}
    <br>
    <label>Especialidade: </label>{{$dados['especialidade']}}
</body>
</html>