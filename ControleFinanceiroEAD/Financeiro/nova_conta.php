<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/ContaDAO.php';

if (isset($_POST['btnGravar'])) {
    $banco = $_POST['banco'];
    $agencia = $_POST['agencia'];
    $numero = $_POST['numero'];
    $saldo = $_POST['saldo'];

    $objdao = new ContaDAO();
    $ret = $objdao->CadastrarConta($banco, $agencia, $numero, $saldo);
}
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
                        <?php include_once '_msg.php' ?>
                        <h2>Nova Conta</h2>
                        <h5>Aqui você podera Cadastrar todas as suas Contas Bancárias. </h5>
                    </div>
                </div>
                <hr />
                <form method="POST" action="nova_conta.php">
                    <div class="form-group">
                        <label>Nome do Banco:</label>
                        <input class="form-control" placeholder="Digite Nome do Banco..." name="banco" id="banco" />
                    </div>
                    <div class="form-group">
                        <label>Agência</label>
                        <input class="form-control" placeholder="Digite Agência..." name="agencia" id="agencia" />
                    </div>
                    <div class="form-group">
                        <label>Numero da Conta:</label>
                        <input class=" form-control" placeholder="Digite Número da Conta..." name="numero" id="numero" />
                    </div>
                    <div class="form-group">
                        <label>Saldo:</label>
                        <input class=" form-control" placeholder="Digite Saldo da Conta..." name="saldo" id="saldo" />
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarConta()">Gravar</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>