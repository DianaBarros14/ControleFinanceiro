<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/MovimentoDAO.php';
require_once '../DAO/CategoriaDAO.php';
require_once '../DAO/EmpresaDAO.php';
require_once '../DAO/ContaDAO.php';

$dao_cat = new CategoriaDAO();
$dao_emp = new EmpresaDAO();
$dao_con = new ContaDAO();


if (isset($_POST['btnFinalizar'])) {
    $tipo = $_POST['tipo'];
    $data = $_POST['data'];
    $valor = $_POST['valor'];
    $obs = $_POST['obs'];
    $categoria = $_POST['categoria'];
    $empresa = $_POST['empresa'];
    $conta = $_POST['conta'];

    $objdao = new MovimentoDAO();
    $ret = $objdao->RealizarMovimento($tipo, $data, $valor, $obs, $categoria, $empresa, $conta);
}

$categorias = $dao_cat->ConsultarCategoria();
$empresas = $dao_emp->ConsultarEmpresa();
$contas = $dao_con->ConsultarConta();

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
                        <?php include_once '_msg.php' ?>
                        <h2>Realizar Movimento</h2>
                        <h5>Aqui você podera realizar os seus Movimentos de ENTRADA e SAIDA. </h5>
                    </div>
                </div>
                <hr />
                <form method="POST" action="realizar_movimento.php">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tipo do Movimento:</label>
                            <select class="form-control" name="tipo" id="tipo">
                                <option value="">Selecione</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saida</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Data</label>
                            <input type="date" name="data" class="form-control" placeholder="dd/mm/aaaa" id="data" />
                        </div>
                        <div class="form-group">
                            <label>Valor:</label>
                            <input class=" form-control" name="valor" placeholder="Digite valor do Movimento..." id="valor" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Categoria:</label>
                            <select class="form-control" name="categoria" id="categoria">
                                <option value="">Selecione</option>
                                <?php foreach ($categorias as $item){?>
                                    <option value="<?= $item['id_categoria'] ?>">
                                        <?= $item['nome_categoria'] ?>
                                    </option>
                                    <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Empresa:</label>
                            <select class="form-control" name="empresa" id="empresa">
                                <option value="">Selecione</option>
                                <?php foreach ($empresas as $item){?>
                                    <option value="<?= $item['id_empresa'] ?>">
                                        <?= $item['nome_empresa'] ?>
                                    </option>
                                    <?php } ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Conta:</label>
                            <select class="form-control" name="conta" id="conta">
                                <option value="">Selecione</option>
                                <?php foreach ($contas as $item){?>
                                    <option value="<?= $item['id_conta'] ?>">
                                        <?= 'Banco: ' . $item['banco_conta'] . ' , Agência / Número: ' . $item['agencia_conta'] . ' / ' . $item['numero_conta'] . ' - Saldo: R$ ' . $item['saldo_conta'] ?>
                                    </option>
                                    <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Observação (Opcional):</label>
                            <textarea class="form-control" rows="3" name="obs"></textarea>
                        </div>
                        <button type="submit" class="btn btn-success" name="btnFinalizar" onclick="return RealizarMovimento()">Finalizar Lançamento</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>