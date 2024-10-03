<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar usuário</title>
</head>
<body>
<form action="/editar_usuario/{{$user->id}}" method="post">
        @csrf
        {{method_field("PATCH")}}
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name" value="{{$user->name}}">
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf" value="{{$user->cpf}}">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$user->email}}">
        </div>

        <input type="submit" class="submit" value="Salvar alterações">
    </form>
</body>
</html>