<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    @if ($produtos->isEmpty())
        <h1>Lista vazia, cadastre um novo produto</h1>
        <button><a href="/cadastro_produto">Cadastrar produto</a></button>
    @else
    <table border="1" width="40%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td>{{$produto->nome}}</td>
                    <td>{{$produto->descricao}}</td>
                    <td>{{$produto->preco}}</td>
                    <td>
                        <form method="post" action="/deletar_produto/{{$produto->id}}">
                            @csrf
                            {{method_field("DELETE") }} 
                            <input type="submit" value="Deletar">
                        </form>
                        <a href="/editar_produto/{{$produto->id}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</body>
</html>