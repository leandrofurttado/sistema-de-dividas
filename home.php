<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Principal</title>
    <link rel="stylesheet" href="css/home.css">
</head>
<body>
    <div id="caixa">
        <a href="">
            <div class="mes">
                <h3>Janeiro</h3>
                
            </div>
            <div class="mes">
                <h3>Fevereiro</h3>
            </div>
        </a>
    </div>
    <a id="sair" href="/index.php">SAIR</a>
    <h2 class="dividas-text">Dívidas/A pagar</h2>
    <button id="adicionar"><a href="#">+</a></button>
    <table>
        <tr>
            <td class="titulo-barra"></td>
            <td class="titulo-barra">Origem</td>
            <td class="titulo-barra">Descrição</td>
            <td class="titulo-barra">Valor</td>
            <td class="titulo-barra">Vencimento</td>
        </tr>
        <tr>
            <td class="titulo-delete"><a href="#">Apagar</a></td>
            <td class="titulo-result">Boleto Bancário</td>
            <td class="titulo-result">Compras Renner</td>
            <td class="titulo-result">R$ 241,23</td>
            <td class="titulo-result">21/03/2023</td>
        </tr>
        <tr>
            <td class="titulo-delete"><a href="#">Apagar</a></td>
            <td class="titulo-result">Boleto Bancário</td>
            <td class="titulo-result">Compras Shopping</td>
            <td class="titulo-result">R$ 241,23</td>
            <td class="titulo-result">21/03/2023</td>
        </tr>
        <tr>
            <td class="titulo-delete"><a href="#">Apagar</a></td>
            <td class="titulo-result">Boleto Bancário</td>
            <td class="titulo-result">Compras C&A</td>
            <td class="titulo-result">R$ 241,23</td>
            <td class="titulo-result">21/03/2023</td>
        </tr>
        <tr id="somatoria">
            <td></td>
            <td></td>
            <td>TOTAL:</td>
            <td>R$ 1500</td>
            <td></td>
        </tr>
    </table>
    <h2 class="dividas-text">Entradar/A receber</h2>
    <button id="adicionar"><a href="#">+</a></button>
    <table>
        <tr>
            <td class="titulo-barra"></td>
            <td class="titulo-barra">Origem</td>
            <td class="titulo-barra">Valor</td>
            <td class="titulo-barra">Dia Recebimento</td>
        </tr>
        <tr>
            <td class="titulo-delete"><a href="#">Apagar</a></td>
            <td class="titulo-result">PIX</td>
            <td class="titulo-result">R$ 241,23</td>
            <td class="titulo-result">21/04/2023</td>
        </tr>
        <tr id="somatoria-verde">
            <td></td>
            <td></td>
            <td>TOTAL:</td>
            <td>R$ 1500</td>
        </tr>
    </table>
    <div class="saldo-total">
        <h3>Saldo total: R$0,00</h3>
    </div>
</body> 
</html>