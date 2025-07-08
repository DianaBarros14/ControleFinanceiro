<?php

if (isset($_POST['btnEnviar'])) {
    $repeticao = trim($_POST['repeticao']);

    if ($repeticao == '') {
        $msgError = '<div style="font-wight: bold; color:#ff0000;">Preencher todos os campos obrigatórios! </div>';
    }

    for ($i = 0; $i <= $repeticao; $i++) {
        echo 'Valor da variavel $i é: ' . $i  . '.';
        echo '<br>';
    }
    echo ' Fim da repetição.';
    echo '<hr>';
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
    <form method="POST" action="exercicio_3_array.php">
        <label>Digite um número que informe a quantidade de vezes de repetição</label>
        <input type="number" name="repeticao" value="<?= isset($repeticao) ? $repeticao : '' ?>">
        <button name="btnEnviar">Ver Resultado</button>
    </form>
    <?= isset($msgError) ? $msgError : '' ?>
</body>

</html>