<?php
if(isset($_POST['btnEnviar'])){
    $pessoa = $_POST['nome'];
    $rua = $_POST['rua'];
    $bairro = $_POST['bairro'];
    $cep = $_POST['cep'];

    echo 'Nome do Usuário: ' .  $pessoa . '.<br>Rua: ' . $rua . '.<br>Bairro: ' . $bairro . '.<br>CEP: ' . $cep . '<hr>';
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
    <form action="exemplo.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Digite sua Rua:</label>
        <input type="text" name="rua">
        <br>
        <label>Digite seu Bairro:</label>
        <input type="text" name="bairro">
        <br>
        <label>Digite seu CEP:</label>
        <input type="text" name="cep">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>
    
</body>
</html>