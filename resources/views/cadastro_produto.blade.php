<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro produto</title>
    <link rel="stylesheet" href="../css/produto.css">
</head>
<body>
    <form action="/criar_produto" method="post">
        @csrf
        <div class="form-group">
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </div>
      
        <div class="form-group">
            <label for="descricao">Descrição</label>
            <input type="text" name="descricao">
        </div>

        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="text" name="preco">
        </div>


        <input type="submit" value="Salvar" class="submit">
    </form>
</body>
</html>

