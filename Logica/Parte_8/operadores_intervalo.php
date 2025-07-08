<?php

$inicio = '';
$meio = '';
$fim = '';

if (isset($_POST['btn_verificar'])) {
    $inicio = $_POST['inicio'];
    $meio = $_POST['meio'];
    $fim = $_POST['fim'];

    if (trim($inicio) == '') {
        echo 'Preencher o campo Inicio';
    } else if (trim($meio) == '') {
        echo 'Preencher o campo Meio';
    } else if (trim($fim) == '') {
        echo 'Preencher o campo Fim';
    } else {
        if ($inicio <= $meio && $meio <= $fim) {
            echo 'O numero ' . $meio . ' está entre ' . $inicio . ' e ' . $fim;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="operadores_intervalo.php" method="post">

        <label>Inicio</label>
        <input type="text" name="inicio" value="<?= $inicio ?>">

        <label>Meio</label>
        <input type="text" name="meio" value="<?= $meio ?>">

        <label>Fim</label>
        <input type="text" name="fim" value="<?= $fim ?>">

        <button name="btn_verificar">Verificar</button>
</body>

</html>