<?php

    require_once 'ClassDAO.php';

    if(isset($_POST['btnCalcular'])){
        $meses = trim($_POST['meses']);
        $ganhos = trim($_POST['ganhos']);
        $lucro = trim($_POST['lucro']);
        $perda = trim($_POST['perda']);

        $objDAO = new ClassDAO();
        $ret = $objDAO->CalcularSalario($meses, $ganhos, $lucro, $perda);

        if($ret == 'error'){
            $msgError = '<div style="font-weight: bold; color: #FF0000;">Preencher todos os campos obrigatórios!</div>';
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 3</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_3.php" method="POST">
        <label>Meses trabalhados:</label>
        <input type="text" name="meses" value="<?= isset($meses) ? $meses : '' ?>">
        <br>
        <label>Ganho Médio Mensal:</label>
        <input type="text" name="ganhos" value="<?= isset($ganhos) ? $ganhos : '' ?>">
        <br>
        <label>Percentual de Lucro Total (%):</label>
        <input type="text" name="lucro" value="<?= isset($lucro) ? $lucro : '' ?>">
        <br>
        <label>Percentual de Perda Total (%):</label>
        <input type="text" name="perda" value="<?= isset($perda) ? $perda : '' ?>">
        <br>
        <button name="btnCalcular">CALCULAR</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <!-- ====== Final das PHP! ====== -->  

    <?php if(isset($ret) && $ret != '' && $ret != 'error'){ ?>
        <br>
        <strong>Resultado Final:</strong>
        <input disabled value="<?= $ret ?>">
    <?php } ?>
</body>
</html>