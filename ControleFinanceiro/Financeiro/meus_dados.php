<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/UsuarioDAO.php';

$objdao = new UsuarioDAO();

if (isset($_POST['btnGravar'])) {
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $ret = $objdao->GravarMeusDados($nome, $email, $senha);
}

$dados = $objdao->CarregarMeusDados();

//echo '<pre>';
//print_r($dados);
//echo '</pre>';

?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once "_head.php"; ?>

<body>
    <div id="wrapper">
        <?php
        include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php'; ?>
                        <h2>Meus Dados</h2>
                        <h5>Seja Bem Vinda Diana, amamos vê-la por aqui. </h5>
                    </div>
                </div>
                <hr />
                <form method="post" action="meus_dados.php">
                    <div class="form-group">
                        <label>Nome:</label>
                        <input class="form-control" placeholder="Digite seu nome..." name="nome" id="nomeUsuario" value="<?= $dados[0]['nome_usuario'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input class="form-control" placeholder="Digite seu e-mail..." name="email" id="emailUsuario" value="<?= $dados[0]['email_usuario'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <div class="box-senha">
                            <input type="password" class="form-control" placeholder="Digite sua senha..." name="senha" id="senha" value="<?= $dados[0]['senha_usuario'] ?>" />
                            <img src="./assets/img/img_senha.png" id="olho" alt="Ver Senha Cadastrada!" title="Ver senha Cadastrada!" class="icon-senha">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarMeusDados()">Gravar</button>
                </form>
            </div>

            <script>
                $("#olho").mousedown(function() {
                    $("#senha").attr("type", "text");
                });

                $("#olho").mouseup(function() {
                    $("#senha").attr("type", "password");
                });
            </script>
        </div>
    </div>

</body>

</html>