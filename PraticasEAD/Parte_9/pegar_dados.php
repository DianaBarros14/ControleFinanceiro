<?php

if (isset($_POST['btnMostrar'])) {
    $nome = trim($_POST['nome']);
    $sobrenome = trim($_POST['sobre']);

    if ($nome == '' || $sobrenome == '') {
        $msgError = '<div style="font-weight: bold>; color:#800000;">Preencher todos os campos obrigatórios!</div>';
    } else {

        header("location: mostrar_dados.php?nome=$nome&sobrenome=$sobrenome");
        exit;
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dados</title>
</head>

<body>
    <form method="POST" action="pegar_dados.php">
        <label>Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ?  $nome : '' ?>">
        <label>Sobrenome:</label>
        <input type="text" name="sobre" value="<?= isset($sobrenome) ? $sobrenome : '' ?>">
        <button name="btnMostrar">Mostrar</button>

    </form>

    <?= isset($msgError) ? $msgError : '' ?>
</body>

</html>