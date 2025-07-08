<?php

if (isset($_POST['btnCaucular'])) {
    $salario = trim($_POST['salario']);
    $aumento = trim($_POST['aumento']);

    if ($salario == '' || $aumento == '') {
        $msgError = '<div style="font-weight: bold>; color:#800000;">Preencher todos os campos obrigatórios!</div>';
    } else {
        $totalAumento = ($salario * $aumento) / 100;
        $salarioTotal = $salario + $totalAumento;

        if ($totalAumento <= 0) {
            $status = '<div style="font-weight: bold>; color:#800000;">Sem aumento identificado!</div>';
        } else if ($totalAumento > 00 && $totalAumento <= 100) {
            $status = '<div style="font-weight: bold>; color:#800000;">Aumento de Nível 1!</div>';
        } else if ($totalAumento > 100 && $totalAumento <= 200) {
            $status = '<div style="font-weight: bold>; color:#FF4500;">Aumento Nível 2!</div>';
        } else if ($totalAumento > 200 && $totalAumento <= 300) {
            $status = '<div style="font-weight: bold>; color:#FF8C00;">Aumento Nível 3!</div>';
        } else if ($totalAumento > 300 && $totalAumento <= 400) {
            $status = '<div style="font-weight: bold>; color:#FFD700;">Aumento Nível 4</div>';
        } else {
            $status = '<div style="font-weight: bold>; color:#006400;">Aumento Nível 5!</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 4</title>
</head>

<body>
    <form method="POST" action="ex_4.php">
        <label> Salário (R$): </label>
        <input type="text" name="salario" value="<?= isset($salario) ? $salario : '' ?>">
        <br>
        <label> Aumento (%): </label>
        <input type="text" name="aumento" value="<?= isset($aumento) ? $aumento : '' ?>">
        <br>
        <button name="btnCaucular">Caucular</button>
    </form>
    <!-- ==== validaçoes do PHP ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ==== final do PHP ==== -->
    <strong>Total de Aumento:</strong>
    <input disabled value="R$ <?= isset($totalAumento) ? number_format($totalAumento, 2, ',', '.') : '' ?>">
    <br>
    <strong>Salário Total Final:</strong>
    <input disabled value="R$ <?= isset($salarioTotal) ? number_format($salarioTotal, 2, ',', '.') : '' ?>">
</body>
</hmtl>