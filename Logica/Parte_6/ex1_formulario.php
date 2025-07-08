<?php
if(isset($_POST['btnEnviar'])){
    $nome = $_POST['prato'];
    $descricao = $_POST['info'];
    $preco = $_POST['custo'];
    $ingredientes = $_POST['itens'];

    echo 'Nome do prato: ' . $nome . '.<br>Descrição: '. $descricao . '.<br>Valor: ' . $preco . '.<br>Ingredientes: ' . $ingredientes . '.<hr>';
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
    <form action="ex1_formulario.php" method="POST">
        <label>Nome do prato:</label>
        <input type="text" name="prato">
        <br>
        <label>Descrição:</label>
        <input type="text" name="info">
        <br>
        <label>Preço:</label>
        <input type="number" name="custo">
        <br>
        <label>Ingredientes:</label>
        <input type="text" name="itens">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

</body>

</html>