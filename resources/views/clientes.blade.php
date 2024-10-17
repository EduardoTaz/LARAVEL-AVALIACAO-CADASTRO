<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    @if ($clientes->isEmpty())
        <h1>Lista vazia, cadastre um novo cliente</h1>
        <button><a href="/cadastro_cliente">Cadastrar cliente</a></button>
    @else
    <table border="1" width="40%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>CPF</th>
                <th>Email</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nome}}</td>
                    <td>{{$cliente->cpf}}</td>
                    <td>{{$cliente->email}}</td>
                    <td>
                        <form method="post" action="/deletar_cliente/{{$cliente->id}}">
                            @csrf
                            {{method_field("DELETE") }} 
                            <input type="submit" value="Deletar"> 
                        </form>
                        <a href="/editar_cliente/{{$cliente->id}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</body>
</html>