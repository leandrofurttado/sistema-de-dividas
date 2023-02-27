<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adicionar dívidas</title>
    <link rel="stylesheet" href="css/style_divida.css">
</head>
<body>
    <form action="">
        <input type="text" name="origem" maxlength="100" placeholder="Origem">
        <input type="text" name="description" maxlength="100" placeholder="Descrição">
        <input type="text" name="valor" maxlength="20" placeholder="Valor">
        <input type="date" name="vencimento">
        <input type="submit" name="cadastrar">
    </form>

    <h3>Adicionar dívidas:</h3>
    <div class="caixa-maior">
        <a href="">
            <div class="caixa">+</div>
        </a>
        <div class="items"></div>
    </div>
</body>
</html>