<?php

    require_once './function.php';

    if(isset($_POST['btnEnviar'])){
        $nome = trim($_POST['nome']);
        $info = trim($_POST['info']);
        $senha = trim($_POST['senha']);
        $repSenha = trim($_POST['repSenha']);

        if($nome == '' || $info == '' || $senha == '' || $repSenha == ''){
            $msgError = '<div style="font-weight: bold; color: #FF0000;">Preencher todos os campos obrigatórios!</div>';
        }else if(ValidarNome($nome) == -1){
            $msgError = '<div style="font-weight: bold; color: #FF0000;">O NOME deve conter no mínimo 3 caracteres!</div>';
        }else if(ValidarDescricao($info) == -2){
            $msgError = '<div style="font-weight: bold; color: #FF0000;">A DESCRIÇÃO deve conter no mínimo 50 caracteres!</div>';
        }else if(ValidarSenha($senha) == -3){
            $msgError = '<div style="font-weight: bold; color: #FF0000;">A SENHA deve conter entre 6 e 8 caracteres!</div>';
        }else if(ComprarSenha($senha, $repSenha) == -4){
            $msgError = '<div style="font-weight: bold; color:#FF0000;">As SENHAS devem ser iguais!</div>';
        }else{
            $success = '<div style="font-weight: bold; color: #023300;">Cadastro realizado com Sucesso!</div>';
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade 1</title>
</head>
<body style="font-family: Tahoma;">
    <form action="atividade_1.php" method="POST">
        <label>Digite seu Nome:</label>
        <input type="text" name="nome" value="<?= isset($nome) ? $nome : '' ?>">
        <br>
        <label>Digite uma Descrição:</label>
        <input type="text" name="info" value="<?= isset($info) ? $info : '' ?>">
        <br>
        <label>Digite uma Senha:</label>
        <input type="password" name="senha" value="<?= isset($senha) ? $senha : '' ?>">
        <br>
        <label>Digite Novamente sua Senha:</label>
        <input type="password" name="repSenha" value="<?= isset($repSenha) ? $repSenha : '' ?>">
        <br>
        <button name="btnEnviar">Cadastro</button>
    </form>

    <!-- ==== Validações do PHP! ==== -->
    <?= isset($msgError) ? $msgError : '' ?>
    <br>
    <?= isset($success) ? $success : '' ?>
    <!-- ====== Final das PHP! ====== -->      

</body>
</html>