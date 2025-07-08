<?php
if(isset($_POST['btnEnviar'])){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $assunto = $_POST['assunto'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    echo 'Nome: ' . $nome . '.<br>Sobrenome: ' . $sobrenome . '.<br>Assunto: '. $assunto . '.<br>E-mail: ' . $email . '.<br>Mensagem: ' . $mensagem . '.<br>"Sua mensagem foi enviada com sucesso!"<hr>';
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
    <form action="ex3_formulario.php" method="POST">
        <label>Nome:</label>
        <input type="text" name="nome">
        <br>
        <label>Sobrenome:</label>
        <input type="text" name="sobrenome">
        <br>
        <label>Assunto:</label>
        <input type="text" name="assunto">
        <br>
        <label>E-mail:</label>
        <input type="e-mail" name="email">
        <br>
        <label>Mensagem:</label>
        <input type="text" name="mensagem">
        <br>
        <button name="btnEnviar">ENVIAR</button>
    </form>

</body>

</html>