<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    <table border="1" width="40%">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Matrícula</th>
                <th>Comissão</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vendedores as $vendedor)
                <tr>
                    <td>{{$vendedor->nome}}</td>
                    <td>{{$vendedor->matricula}}</td>
                    <td>{{$vendedor->comissao}}</td>
                    <td>
                        <form method="post" action="/deletar_vendedor/{{$vendedor->id}}">
                            @csrf
                            {{method_field("DELETE") }} 
                            <input type="submit" value="Deletar">
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>