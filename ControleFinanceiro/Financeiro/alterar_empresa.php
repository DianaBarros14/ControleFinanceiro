<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/EmpresaDAO.php';

$objDAO = new EmpresaDAO();

if (isset($_GET['cod']) && is_numeric($_GET['cod'])) {
    $idEmpresa = $_GET['cod'];

    $dados = $objDAO->DetalharEmpresa($idEmpresa);

    // echo '<pre>';
    // var_dump($dados);
    // echo '</pre>';

    if (count($dados) == 0) {
        header('location: consultar_empresa.php');
        exit;
    }
} else if (isset($_POST['btnGravar'])) {
    $empresa = trim($_POST['empresa']);
    $telefone = trim($_POST['telefone']);
    $endereco = trim($_POST['endereco']);
    $idEmpresa = trim($_POST['cod']);

    $ret = $objDAO->AlterarEmpresa($empresa, $telefone, $endereco, $idEmpresa);

    header('location: consultar_empresa.php?ret=' . $ret);
    exit;
} else if (isset($_POST['btnExcluir'])) {
    $idEmpresa = trim($_POST['cod']);

    $ret = $objDAO->ExcluirEmpresa($idEmpresa);

    header('location: consultar_empresa.php?ret=' . $ret);
    exit;
} else {
    header('location consultar_empresa.php');
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
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <?php include_once '_msg.php'; ?>
                        <h2>Alterar Empresa</h2>
                        <h5>Aqui você podera ALTERAR ou EXCLUIR suas Empresas. </h5>

                    </div>
                </div>
                <hr />
                <form action="alterar_empresa.php" method="POST">
                    <input type="hidden" name="cod" value="<?= $dados[0]['id_empresa'] ?>" />
                    <div class="form-group">
                        <label>Nome da Empresa:</label>
                        <input class="form-control" placeholder="Digite Nome da Empresa..." name="empresa" id="empresa" value="<?= $dados[0]['nome_empresa'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Telefone/Whatssap:</label>
                        <input class="form-control" placeholder="Digite Telefone/Whatssap da Empresa..." name="telefone" id="telefone" value="<?= $dados[0]['telefone_empresa'] ?>" />
                    </div>
                    <div class="form-group">
                        <label>Endereço:</label>
                        <input class=" form-control" placeholder="Digite Endereço da Empresa..." name="endereco" id="endereco" value="<?= $dados[0]['endereco_empresa'] ?>" />
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarEmpresa()">Gravar</button>
                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir</button>

                    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                    <h4 class="modal-title" id="myModalLabel">Você deseja realmente excluir essa empresa?</h4>
                                </div>
                                <div class="modal-body">
                                    <strong>Nome Empresa: </strong> <span><?= $dados[0]['nome_empresa'] ?></span>
                                    <br>
                                    <strong>Telefone Empresa: </strong> <span><?= $dados[0]['telefone_empresa'] ?></span>
                                    <br>
                                    <strong>Endereço Empresa: </strong> <span><?= $dados[0]['endereco_empresa'] ?></span>
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