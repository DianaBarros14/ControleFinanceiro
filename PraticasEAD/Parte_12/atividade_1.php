<?php

    require_once 'ClassDAO.php';

    $gas = '';

    if(isset($_POST['btnEnviar'])){
        $gas = $_POST['combustivel'];
        $litros = trim($_POST['qtd']);

        $objDAO = new ClassDAO();
        $ret = $objDAO->CalcularCombustivel($gas, $litros);

        if($ret == 0){
            $msgError = '<div style="font-weight: bold; color: #FF0000;">Preencher todos os campos obrigatórios!</div>';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1 - POO</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_1.php" method="POST">
        <label>Selecione o Tipo do Combustível:</label>
        <select name="combustivel">
            <option value="">Selecione</option>
            <option value="1" <?= $gas == 1 ? 'selected' : '' ?>>Etanol</option>
            <option value="2" <?= $gas == 2 ? 'selected' : '' ?>>Gasolina</option>
            <option value="3" <?= $gas == 3 ? 'selected' : '' ?>>Diesel</option>
        </select>
        <br>
        <label>Informe a Quantidade de Litros:</label>
        <input type="number" name="qtd" value="<?= isset($litros) ? $litros : '' ?>">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <!-- ====== Final das PHP! ====== -->  

    <?php if(isset($ret) && $ret != 0 && $ret != ''){ ?>
        <br>
        <strong>Resultado Final:</strong>
        <input disabled value="R$ <?= number_format($ret, 2, ',', '.') ?>">
    <?php } ?>    
</body>
</html>