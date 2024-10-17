<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar produto</title>
</head>
<body>
<form action="/editar_produto/{{$produto->id}}" method="post">
        @csrf
        {{method_field("PATCH")}}
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome" value="{{$produto->nome}}">
        </div>

        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao" value="{{$produto->descricao}}">
        </div>

        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" name="preco" value="{{$produto->preco}}">
        </div>

        <input type="submit" class="submit" value="Salvar alterações">
    </form>
</body>
</html>