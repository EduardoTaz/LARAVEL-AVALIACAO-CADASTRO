<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Criar usuario</title>
    <link rel="stylesheet" href="../css/usuario.css">
</head>
<body>
    <form action="/criar_usuario" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" name="name">
        </div>

        <div class="form-group">
            <label for="cpf">CPF</label>
            <input type="text" name="cpf">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>

        <input type="submit" class="submit" value="Salvar">
    </form>
</body>
</html>