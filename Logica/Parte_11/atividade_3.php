<?php

    require_once './function.php';

    if(isset($_POST['btnEnviar'])){
        $numero1 = trim($_POST['vl1']);
        $numero2 = trim($_POST['vl2']);
        $numero3 = trim($_POST['vl3']);
        $numero4 = trim($_POST['vl4']);
        $numero5 = trim($_POST['vl5']);
    
        $ret = AtividadeTres($numero1, $numero2, $numero3, $numero4, $numero5);

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
    <title>Atividade 3</title>
</head>
<body style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <form action="atividade_3.php" method="POST">
        <label>Digite o Primeiro Número:</label>
        <input type="text" name="vl1" value="<?= isset($numero1) ? $numero1 : '' ?>">
        <br>
        <label>Digite o Segundo Número:</label>
        <input type="text" name="vl2" value="<?= isset($numero2) ? $numero2 : '' ?>">
        <br>
        <label>Digite o Terceiro Número:</label>
        <input type="text" name="vl3" value="<?= isset($numero3) ? $numero3 : '' ?>">
        <br>
        <label>Digite o Quarto Número:</label>
        <input type="text" name="vl4" value="<?= isset($numero4) ? $numero4 : '' ?>">
        <br>
        <label>Digite o Quinto Número:</label>
        <input type="text" name="vl5" value="<?= isset($numero5) ? $numero5 : '' ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <!-- ====== Final das PHP! ====== -->  
     
    <?php if(isset($ret) && $ret != 0 && $ret != ''){ ?>
        <br>
        <strong>Resultado Final:</strong>
        <input disabled value="<?= $ret ?>">
    <?php } ?>

</body>
