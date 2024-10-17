<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>
</head>
<body>
<form action="/editar_cliente/{{$cliente->id}}" method="post">
        @csrf
        {{method_field("PATCH")}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{$cliente->nome}}">
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" value="{{$cliente->cpf}}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$cliente->email}}">
        </div>

        <input type="submit" class="submit" value="Salvar alterações">
    </form>
</body>
</html>