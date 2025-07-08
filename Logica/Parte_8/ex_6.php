<?php
if (isset($_POST['btnCalcular'])) {
    $salario = trim($_POST['salario']);

    if ($salario == '') {
        $msgError = '<div style="font-weight: bold>; color:#800000;">Preencher todos os campos obrigatórios!</div>';
    } else {
        $primeiroAumento = ($salario * 15) / 100;
        $segundoAumento = ($salario * 18) / 100;
        $totalAumentos = $primeiroAumento + $segundoAumento;
        $salarioTotal = $salario + $totalAumentos;

        if ($totalAumentos <= 0) {
            $status = '<div style="font-weight: bold>; color:#800000;">Aumento não encontrado!</div>';
        } else if ($totalAumentos > 00 && $totalAumentos <= 100) {
            $status = '<div style="font-weight: bold>; color:#800000;">Aumento ruim!</div>';
        } else if ($totalAumentos > 100 && $totalAumentos <= 200) {
            $status = '<div style="font-weight: bold>; color:#FF8C00;">Aumento Razoavel!</div>';
        } else if ($totalAumentos > 200 && $totalAumentos <= 300) {
            $status = '<div style="font-weight: bold>; color:#006400;">Aumento Bom</div>';
        } else if ($totalAumentos > 300 && $totalAumentos <= 400) {
            $status = '<div style="font-weight: bold>; color:#006400;">Aumento Ótimo</div>';
        } else {
            $status = '<div style="font-weight: bold>; color:#006400;">Aumento Excelente</div>';
        }
    }
}


?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 6</title>
</head>

<body>
    <form method="POST" action="ex_6.php">
        <label>Digite um Salário (R$):</label>
        <input type="text" name="salario" value='<?= isset($salario) ? $salario : '' ?>'>
        <button name="btnCalcular">Caulcular</button>
    </form>
    <!-- ==== validaçoes do PHP ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ==== final do PHP ==== -->
    <strong>Total do Primeiro Aumento:</strong>
    <input disabled value="R$ <?= isset($primeiroAumento) ? number_format($primeiroAumento, 2, ',', '.') : '' ?>">
    <br>
    <strong>Total do Segundo Aumento:</strong>
    <input disabled value="R$ <?= isset($segundoAumento) ? number_format($segundoAumento, 2, ',', '.') : '' ?>">
    <br>
    <strong>Total dos Aumentos:</strong>
    <input disabled value="R$ <?= isset($totalAumentos) ? number_format($totalAumentos, 2, ',', '.') : '' ?>">
    <br>
    <strong>Salário Total:</strong>
    <input disabled value="R$ <?= isset($salarioTotal) ? number_format($salarioTotal, 2, ',', '.') : '' ?>">
</body>

</html>