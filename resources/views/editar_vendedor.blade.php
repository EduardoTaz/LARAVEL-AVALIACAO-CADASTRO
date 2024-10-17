<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar vendedor</title>
</head>
<body>
<form action="/editar_vendedor/{{$vendedor->id}}" method="post">
        @csrf
        {{method_field("PATCH")}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{$vendedor->nome}}">
        </div>

        <div class="form-group">
            <label for="matricula">Matricula</label>
            <input type="text" name="matricula" value="{{$vendedor->matricula}}">
        </div>

        <div class="form-group">
            <label for="comissao">Comissao</label>
            <input type="text" name="comissao" value="{{$vendedor->comissao}}">
        </div>

        <input type="submit" class="submit" value="Salvar alterações">
    </form>
</body>
</html>