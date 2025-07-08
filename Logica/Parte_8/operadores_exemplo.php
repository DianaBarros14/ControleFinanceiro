<?php

if (isset($_POST['btn_verificar'])) {

    $numero = $_POST['numero'];

    if (trim($numero) == '') {
        echo 'preencher o campo NUMERO';
    } else {

        if ($numero > 100) {
            echo 'O numero ' . $numero . ' é maior do que 100';
        } else if ($numero == 100) {
            echo 'O numero ' . $numero . ' é igual a 100';
        } else {
            echo 'O numero ' . $numero . ' é menor do que 100';
        }
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores</title>
</head>

<body>
    <form method="post" action="operadores_exemplo.php">
        <label>Numero digitado</label>
        <input type="text" name="numero">
        <button name="btn_verificar">Verificar</button>

    </form>

</body>

</html>