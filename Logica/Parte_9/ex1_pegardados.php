<?php

if (isset($_POST['btnCaucular'])) {
    $nome = trim($_POST['nome']);
    $peso = trim($_POST['peso']);
    $altura = trim($_POST['altura']);

    if ($nome == '' || $peso == '' || $altura == '') {
        $msgError = '<div style="font-weight: bold>; color:#800000;">Preencher todos os campos obrigatórios!</div>';
    } else {
        header("location:ex1_mostrardadosimc.php?nome=$nome&peso=$peso&altura=$altura");
        exit;
    }
}


?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="POST" action="ex1_pegardados.php">
            <label>Seu nome:</label>
            <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
            <br>
            <label>Seu peso:</label>
            <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
            <br>
            <label>Sua altura:</label>
            <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
            <br>
            <button name="btnCaucular">Caucular</button>
    </form>

    <?= isset($msgError) ? $msgError : '' ?>
</body>

</html>