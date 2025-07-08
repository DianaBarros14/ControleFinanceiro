<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/EmpresaDAO.php';
if (isset($_POST['btnGravar'])) {
    $empresa = $_POST['empresa'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];

    $objdao = new EmpresaDAO();
    $ret = $objdao->CadastrarEmpresa($empresa, $telefone, $endereco);
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
        <form method="POST" action="nova_empresa.php">
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">
                            <?php include_once '_msg.php' ?>
                            <h2>Nome da Empresa</h2>
                            <h5>Aqui você podera Cadastrar todas os nomes das Empresas. </h5>
                        </div>
                    </div>
                    <hr />
                    <div class="form-group">
                        <label>Nome da Empresa:</label>
                        <input class="form-control" placeholder="Digite Nome da Empresa. Exemplo: Casas Bahia..." name="empresa" id="empresa" />
                    </div>
                    <div class="form-group">
                        <label>Telefone/Whatssap:</label>
                        <input class="form-control" placeholder="Digite Telefone/Whatssap da Empresa." name="telefone" id="telefone" />
                    </div>
                    <div class="form-group">
                        <label>Endereço:</label>
                        <input class="form-control" placeholder="Digite Endereço da Empresa." name="endereco" id="endereco" />
                    </div>
                    <button type="submit" class="btn btn-success" name="btnGravar" onclick="return ValidarEmpresa()">Gravar</button>
        </form>
    </div>
    </div>
    </div>
</body>

</html>