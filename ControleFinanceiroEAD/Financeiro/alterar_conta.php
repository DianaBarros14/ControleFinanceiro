<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/ContaDAO.php';

$objDAO = new ContaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {
    $idConta = $_GET['cod'];

    $dados = $objDAO->DetalharConta($idConta);

    if (count($dados) == 0) {
        header('location: consultar_conta.php');
        exit;
    }
} else if (isset($_POST['btnGravar'])) {
    $banco = trim($_POST['banco']);
    $agencia = trim($_POST['agencia']);
    $numero = trim($_POST['numero']);
    $saldo = trim($_POST['saldo']);
    $idConta = trim($_POST['cod']);

    $ret = $objDAO->AlterarConta($banco, $agencia, $numero, $saldo, $idConta);

    header('location: consultar_conta.php?ret=' . $ret);
    exit;
} else if (isset($_POST['btnExcluir'])) {
    $idConta = trim($_POST['cod']);
   
    $ret = $objDAO->ExcluirConta($idConta);
   
    header('location: consultar_conta.php?ret=' . $ret);
    exit;
} else {
    header('location: consultar_conta.php');
    exit;
}
?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<?php include_once "_head.php"; ?>

<body>
    <div id="wrapper">
        <?php include_once '_topo.php';
        include_once '_menu.php';
        ?>
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php'; ?>
                        <h2>Alterar ou Excluir Conta Bancária</h2>
                        <h5>Aqui você podera ALTERAR ou EXCLUIR sua Conta Bancária. </h5>
                    </div>
                </div>
                <hr />
                <form action="alterar_conta.php" method="POST">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_conta'] ?>">
                    <div class="form-group">
                        <label>Nome do Banco:</label>
                        <input class="form-control" placeholder="Digite Nome do Banco..." name="banco" id="banco" value="<?= $dados[0]['banco_conta'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Agência:</label>
                        <input class="form-control" placeholder="Digite Agência..." name="agencia" id="agencia" value="<?= $dados[0]['agencia_conta'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Número da Conta:</label>
                        <input class=" form-control" placeholder="Digite Número da Conta..." name="numero" id="numero" value="<?= $dados[0]['numero_conta'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Saldo:</label>
                        <input class=" form-control" placeholder="Digite Saldo..." name="saldo" id="saldo" value="<?= $dados[0]['saldo_conta'] ?>" />
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarConta()">Gravar</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</button>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Você deseja realmente excluir essa conta bancária?</h4>
                                </div>
                                <div class="modal-body">
                                    <strong>Nome do Banco:</strong> <span><?= $dados[0]['banco_conta'] ?></span>
                                    <br>
                                    <strong>Numero da Agência:</strong> <span><?= $dados[0]['agencia_conta'] ?></span>
                                    <br>
                                    <strong>Numero da Conta:</strong> <span><?= $dados[0]['numero_conta'] ?></span>
                                    <br>
                                    <strong>Saldo da Conta:</strong> <span><?= number_format($dados[0]['saldo_conta'], 2, ',', '.') ?></span>
                                    <br>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                                    <button type="submit" name="btnExcluir" class="btn btn-primary">Confirmar</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
        </form>
    </div>
    </div>
    </div>
</body>

</html>