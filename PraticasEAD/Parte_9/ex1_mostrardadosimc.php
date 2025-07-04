<?php
if (
    isset($_GET['nome']) && $_GET['nome'] != '' &&
    isset($_GET['peso']) && $_GET['peso'] != '' &&
    isset($_GET['altura']) && $_GET['altura'] != ''
) {
    $nome = $_GET['nome'];
    $peso = $_GET['peso'];
    $altura = $_GET['altura'];

    $imc = $peso / ($altura * $altura);

 if ($imc <= 0) {
        $status = '<div style="font-weight: bold>; color:#800000;">IMC não encontrado!</div>';
    } else if ($imc > 0 && $imc <= 20) {
        $status = '<div style="font-weight: bold>; color:#006400;">Magro!</div>';
    } else if ($imc > 21 && $imc <= 25) {
        $status = '<div style="font-weight: bold>; color:#006400;">Peso Ideal!</div>';
    } else if ($imc > 26 && $imc <= 30) {
        $status = '<div style="font-weight: bold>; color:#006400;">Obeso!</div>';
    } else {
        $status = '<div style="font-weight: bold>; color:#006400;">Muito Obeso!</div>';
    }
}else{
    header('location:ex1_pegardados.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex1_mostrardadosimc" method="POST">
    <strong>Nome:</strong>
    <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
    <br>
    <strong>Imc</strong>
    <input type="number" name="imc" value="<?= isset($imc) ? $imc : '' ?>">
    <br>
    <strong>Classificação IMC</strong>
    <input type="text" name="class" value="<?= isset($class) ? $class : '' ?>">
    <br>
    <button name="somar">Somar</button>
</form>
</body>
</html>