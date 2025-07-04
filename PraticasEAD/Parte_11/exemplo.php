<?php

require_once 'function.php';

if (isset($_POST['btnSomar'])) {
    $valor1 = trim($_POST['valor1']);
    $valor2 = trim($_POST['valor2']);

    if ($valor1 == '' || $valor2 == '') {
        $msgError = '<div style="font-wight: bold; color:#ff0000;">Preencher todos os campos obrigatórios! </div>';
    } else {
        $resultado = SomarValoresExemplo($valor1, $valor2);
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exenplo</title>
</head>

<body>
    <form action="exemplo.php" method="POST">
        <label>Digite o 1º Número:</label>
        <input type="text" name="valor1" value="<?= isset($valor1) ? $valor1 : '' ?>">
        <br>
        <label>Digite o 2º Número:</label>
        <input type="text" name="valor2" value="<?= isset($valor2) ? $valor2 : '' ?>">
        <br>
        <button name="btnSomar">Somar</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
</body>

</html>