<?php

if (isset($_POST['btnEnviar'])) {
    $nota_1 = trim($_POST['nota_1']);
    $nota_2 = trim($_POST['nota_2']);
    $nota_3 = trim($_POST['nota_3']);
    $nota_4 = trim($_POST['nota_4']);

    if ($nota_1 == '' || $nota_2 == '' || $nota_3 == '' || $nota_4 == '') {
        $msgError = '<div style="font-weight: bold>; color:#800000;">Preencher todos os campos obrigatórios!</div>';
    } else {
        $media = ($nota_1 + $nota_2 + $nota_3 + $nota_4) / 4;

        if ($media < 0) {
            $status = '<div style="font-weight: bold>; color:#800000;">Digite os valores corretamente!</div>';
        } else if ($media >= 0 && $media < 40) {
            $status = '<div style="font-weight: bold>; color:#800000;">Aluno reprovado!</div>';
        } else if ($media >= 40 && $media < 60) {
            $status = '<div style="font-weight: bold>; color:#FF8C00;">Aluno de Exame!</div>';
        } else {
            $status = '<div style="font-weight: bold>; color:#006400;">Aluno Aprovado!</div>';
        }
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

<body>
    <form method="POST" action="ex_3.php">
        <label> 1ª Nota: </label>
        <input type="text" name="nota_1" placeholder="Digite aqui..." value="<?= isset($nota_1) ? $nota_1 : '' ?>">
        <br>
        <label> 2ª Nota: </label>
        <input type="text" name="nota_2" placeholder="Digite aqui..." value="<?= isset($nota_2) ? $nota_2 : '' ?>">
        <br>
        <label> 3ª Nota: </label>
        <input type="text" name="nota_3" placeholder="Digite aqui..." value="<?= isset($nota_3) ? $nota_3 : '' ?>">
        <br>
        <label> 4ª Nota: </label>
        <input type="text" name="nota_4" placeholder="Digite aqui..." value="<?= isset($nota_4) ? $nota_4 : '' ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
    <!-- ==== validaçoes do PHP ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <?= isset($status) ? $status : '' ?>
    <!-- ==== final do PHP ==== -->
    <strong>Resultado Final:</strong>
    <input disabled value="<?= isset($media) ? $media : '' ?>">
</body>

</html>