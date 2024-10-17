<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>
</head>
<body>
    @if ($users->isEmpty())
        <h1>Lista vazia, cadastre um novo usuário</h1>
        <button><a href="/cadastro_usuario">Cadastrar usuário</a></button>
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
            @foreach ($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->cpf}}</td>
                    <td>{{$user->email}}</td>
                    <td>
                        <form method="post" action="/deletar_usuario/{{$user->id}}">
                            @csrf
                            {{method_field("DELETE") }} 
                            <input type="submit" value="Deletar"> 
                        </form>
                        <a href="/editar_usuario/{{$user->id}}">Editar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</body>
</html>