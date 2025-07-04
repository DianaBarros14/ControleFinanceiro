<?php

if (isset($_POST['btnCaucular'])) {
    $num1 = trim($_POST['n1']);
    $num2 = trim($_POST['n2']);
    $num3 = trim($_POST['n3']);
    $num4 = trim($_POST['n4']);
    $num5 = trim($_POST['n5']);

    //para verificar se a variavel esta com numero vazio.
    if ($num1 == '' || $num2 == '' || $num3 == '' || $num4 == '' || $num5 == '') {
        //variavel para substituir o echo e ver se ela esta com erro (echo e apenas para teste).
        // essa variavel possui a finalidade de conter uma mensagem.
        $msgError = '<div style="font-weight: bold>; color:#800000;">Preencher todos os campos obrigatórios!</div>';
    } else {
        $resultado = (($num1 + $num2) * 2) + $num3 + $num4 + $num5;

        if ($resultado < 100) {
            $status = '<div style="font-weight: bold>; color:#006400;">Resultado menor que 100!</div>';
        } else if ($resultado > 100) {
            $status = '<div style="font-weight: bold>; color:#006400;">Resultado maior que 100!</div>';
        } else {
            $status = '<div style="font-weight: bold>; color:#006400;">Resultado iguial a 100!</div>';
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>

<body>
    <form method="POST" action="ex_1.php">
        <label> Campo 1: </label>
        <input type="text" name="n1" value="<?= isset($num1) ? $num1 : '' ?>">
        <br>
        <label> Campo 2: </label>
        <input type="text" name="n2" value="<?= isset($num2) ? $num2 : '' ?>">
        <br>
        <label> Campo 3: </label>
        <input type="text" name="n3" value="<?= isset($num3) ? $num3 : '' ?>">
        <br>
        <label> Campo 4: </label>
        <input type="text" name="n4" value="<?= isset($num4) ? $num4 : '' ?>">
        <br>
        <label> Campo 5: </label>
        <input type="text" name="n5" value="<?= isset($num5) ? $num5 : '' ?>">
        <br>
        <button name="btnCaucular">Caucular</button>
    </form>
    <!-- ==== validaçoes do PHP ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ==== final do PHP ==== -->
    <strong>Resultado Final:</strong>
    <input disabled value="<?= isset($resultado) ? $resultado : '' ?>">
</body>

</html>