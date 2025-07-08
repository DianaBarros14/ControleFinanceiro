<?php

if (isset($_POST['btnCalcular'])) {
    $altura = trim($_POST['altura']);
    $peso = trim($_POST['peso']);

    if ($peso == '' || $altura == '') {
        $msgError = '<div style="font-weight: bold>; color:#800000;">Preencher todos os campos obrigatórios!</div>';
    } else {
        $imc = $peso / ($altura * $altura);

        if ($imc <= 0) {
            $status = '<div style="font-weight: bold>; color:#800000;">IMC não encontrado!</div>';
        } else if ($imc > 0 && $imc <= 20) {
            $status = '<div style="font-weight: bold>; color:#006400;">Magro!</div>';
        } else if ($imc > 20 && $imc <= 25) {
            $status = '<div style="font-weight: bold>; color:#006400;">Peso Ideal!</div>';
        } else if ($imc > 25 && $imc <= 30) {
            $status = '<div style="font-weight: bold>; color:#006400;">Obeso!</div>';
        } else {
            $status = '<div style="font-weight: bold>; color:#006400;">Muito Obeso!</div>';
        }
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

<body>
    <form method="POST" action="ex_5.php">
        <label>Digite seu Peso:</label>
        <input type="text" name="peso" value="<?= isset($peso) ? $peso : '' ?>">
        <br>
        <label>Digite sua Altura:</label>
        <input type="text" name="altura" value="<?= isset($altura) ? $altura : '' ?>">
        <br>
        <button name="btnCalcular">Caucular</button>
    </form>
    <!-- ==== validaçoes do PHP ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ==== final do PHP ==== -->
    <strong>Resultado do IMC Encontrado:</strong>
    <input disabled value="<?= isset($imc) ? $imc : '' ?>">
</body>

</html>