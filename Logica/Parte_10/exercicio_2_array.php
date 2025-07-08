<?php

if (isset($_POST['btnEnviar'])) {
    $fruta_1 = trim($_POST['fruta1']);
    $fruta_2 = trim($_POST['fruta2']);
    $fruta_3 = trim($_POST['fruta3']);
    $fruta_4 = trim($_POST['fruta4']);
    $fruta_5 = trim($_POST['fruta5']);

    if ($fruta_1 == '' || $fruta_2 == '' || $fruta_3 == '' || $fruta_4 == '' || $fruta_5 == '') {
        $msgError = '<div style="font-wight: bold; color:#ff0000;">Preencher todos os campos obrigatórios! </div>';
    } else {
        $frutas = array($fruta_1, $fruta_2, $fruta_3, $fruta_4, $fruta_5);

        for ($i = 0; $i < count($frutas); $i++) {
            echo 'A FRUTA armazenada no Array que esta na Posição ' . ($i + 1) . ' é: ' . $frutas[$i] . '.<br>';
        }
        echo '<hr>';
    }
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 2 </title>
</head>

<body>
    <form action="exercicio_1_array.php" method="POST">
        <label>Digite o Nome da 1ª fruta:</label>
        <input type="text" name="fruta1" value="<?= isset($fruta_1) ? $fruta_1 : '' ?>">
        <br>
        <label>Digite o Nome da 2ª fruta:</label>
        <input type="text" name="fruta2" value="<?= isset($fruta_2) ? $fruta_2 : '' ?>">
        <br>
        <label>Digite o Nome da 3ª fruta:</label>
        <input type="text" name="fruta3" value="<?= isset($fruta_3) ? $fruta_3 : '' ?>">
        <br>
        <label>Digite o Nome da 4ª fruta:</label>
        <input type="text" name="fruta4" value="<?= isset($fruta_4) ? $fruta_4 : '' ?>">
        <br>
        <label>Digite o Nome da 5ª fruta:</label>
        <input type="text" name="fruta5" value="<?= isset($fruta_5) ? $fruta_5 : '' ?>">
        <br>
        <button name="btnEnviar">Enviar</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
</body>

</html>