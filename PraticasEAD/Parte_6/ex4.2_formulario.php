<?php
if(isset($_POST['btnEnviar'])){
    $data = $_POST['data'];
    $mes = $_POST['mes'];
    $ano = $_POST['ano'];

    echo  $data . '/' . $mes . '/' . $ano  . '.<hr>';
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo</title>
</head>

<body style="font-family: Tahoma;">
    <form action="ex4.2_formulario.php" method="POST">
        <label>Data de Hoje:</label>
        <input type="number" name="data">
        <br>
        <label>Mês Atual:</label>
        <input type="number" name="mes">
        <br>
        <label>Ano Atual:</label>
        <input type="number" name="ano">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

</body>

</html>