<?php

if (isset($_POST['btnEnviar'])) {
    $valor_1 = trim($_POST['valor_1']);
    $valor_2 = trim($_POST['valor_2']);
    $valor_3 = trim($_POST['valor_3']);

    if ($valor_1 == '' || $valor_2 == '' || $valor_3 == '') {
        $msgError = '<div style="font-weight: bold>; color:#800000;">Preencher todos os campos obrigatórios!</div>';
    } else {
        $resultado = $valor_2 / 2;

        if ($resultado < 0) {
            $status = '<div style="font-weight: bold>; color:#800000;">Digite os valores corretamente!</div>';
        }
        if ($resultado >= $valor_1 && $resultado <= $valor_3) {
            $status = '<div style="font-weight: bold>; color:#006400;">O Resultado ' . $resultado . " Esta entre o número " . $valor_1 . " e " . $valor_3 . '.</div>';
        } else if ($valor_1 >= $resultado && $valor_3 <= $resultado) {
            $status = '<div style="font-weight: bold>; color:#006400;">O Resultado ' . $resultado . " Esta entre o número " . $valor_1 . " e " . $valor_3 . '.</div>';
        } else {
            $status = '<div style="font-weight: bold>; color:#006400;">O Resultado ' . $resultado . " Não esta entre o número " . $valor_1 . " e " . $valor_3 . '.</div>';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2</title>
</head>

<body>
    <form method="POST" action="ex_2.php">
        <label> Campo 1: </label>
        <input type="text" name="valor_1" placeholder="Digite aqui..." value="<?= isset($valor_1) ? $valor_1 : '' ?>">
        <br>
        <label> Campo 2: </label>
        <input type="text" name="valor_2" placeholder="Digite aqui..." value="<?= isset($valor_2) ? $valor_2 : '' ?>">
        <br>
        <label> Campo 3: </label>
        <input type="text" name="valor_3" placeholder="Digite aqui..." value="<?= isset($valor_3) ? $valor_3 : '' ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
    <!-- ==== validaçoes do PHP ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ==== final do PHP ==== -->
    <strong>Resultado Final:</strong>
    <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
</body>

</html>