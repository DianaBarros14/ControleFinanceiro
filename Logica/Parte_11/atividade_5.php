<?php

    require_once './function.php';

    if(isset($_POST['btnEnviar'])){
        $nomeProduto = trim($_POST['produto']);
        $valorUni = trim($_POST['valorUni']);
        $quantidade = trim($_POST['quantidade']);

        $resultado = CalcularProduto($valorUni, $quantidade);

        if($resultado == 0){
            $msgError = '<div style="font-weight: bold; color: #FF0000;">Preencher todos os campos obrigatórios!</div>';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 5</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_5.php" method="POST">
        <label>Nome do Produto:</label>
        <input type="text" name="produto" value="<?= isset($nomeProduto) ? $nomeProduto : '' ?>">
        <br>
        <label>Valor Unitário:</label>
        <input type="text" name="valorUni" value="<?= isset($valorUni) ? $valorUni : '' ?>">
        <br>
        <label>Quantidade:</label>
        <input type="text" name="quantidade" value="<?= isset($quantidade) ? $quantidade : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <!-- ====== Final das PHP! ====== -->  

    <?php if(isset($resultado) && $resultado != 0 && $resultado != ''){ ?>
        <br>
        <strong>Resultado Final:</strong>
        <input disabled value="R$ <?= number_format($resultado, 2, ',', '.') ?>">
    <?php } ?>
</body>
</html>