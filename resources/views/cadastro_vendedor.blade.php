<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro vendedor</title>
    <link rel="stylesheet" href="../css/vendedor.css">
</head>
<body>
    <form action="/criar_vendedor" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>
      
        <div class="form-group">
            <label for="matricula">Matrícula</label>
            <input type="text" name="matricula">
        </div>

        <div class="form-group">
            <label for="comissao">Comissão</label>
            <input type="text" name="comissao">
        </div>


        <input type="submit" value="Salvar" class="submit">
    </form>
</body>
</html>

