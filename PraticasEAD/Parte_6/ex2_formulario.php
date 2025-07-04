<?php
if(isset($_POST['btnEnviar'])){
    $empresa = $_POST['nome'];
    $site = $_POST['site'];
    $facebook = $_POST['rede'];
    $instagram = $_POST['rede2'];
    $descricao = $_POST['itens'];

    echo 'Nome da Empresa: ' . $empresa . '.<br>Site: ' . $site . '.<br>Facebook: '. $facebook . '.<br>Instagram: ' . $instagram . '.<br>Descrição: ' . $descricao . '.<hr>';
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
    <form action="ex2_formulario.php" method="POST">
        <label>Digite o Nome da Empresa:</label>
        <input type="text" name="nome">
        <br>
        <label>Digite o Site:</label>
        <input type="text" name="site">
        <br>
        <label>Digite o Facebook:</label>
        <input type="text" name="rede">
        <br>
        <label>Digite o Instagram:</label>
        <input type="text" name="rede2">
        <br>
        <label>Digite uma Descrição:</label>
        <input type="text" name="itens">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

</body>

</html>