<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro cliente</title>
    <link rel="stylesheet" href="{{url('css/cliente.css')}}">
</head>
<body>
    <form action="/criar_cliente" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>

        <input type="submit" value="Salvar" class="submit">
    </form>
</body>
</html>