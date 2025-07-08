<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/MovimentoDAO.php';

if (isset($_POST['btnPesquisar'])) {
    $tipoMov = $_POST['tipoMov'];
    $dataInicio = $_POST['dataInicio'];
    $dataFinal = $_POST['dataFinal'];

    $objdao = new MovimentoDAO();
    $movs = $objdao->ConsultarMovimento($tipoMov, $dataInicio, $dataFinal);
} else if (isset($_POST['btnExcluir'])) {
    $idMov = $_POST['idMov'];
    $idConta = $_POST['idConta'];
    $tipo = $_POST['tipo'];
    $valor = $_POST['valor'];

    $objDAO = new MovimentoDAO();
    $ret = $objDAO->ExcluirMovimento($idMov, $idConta, $tipo, $valor);
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
                        <?php include_once '_msg.php' ?>
                        <h2>Consultar Movimentos</h2>
                        <h5>Aqui você podera consultar todos os movimentos financeiros de ENTRADA e SAIDA. </h5>
                    </div>
                </div>
                <hr />
                <form method="POST" action="consultar_movimento.php">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Selecione o tipo do Movimento:</label>
                            <select class="form-control" name="tipoMov" id="tipoMov">
                                <option value="">Selecione</option>
                                <option value="0">Todos</option>
                                <option value="1">Entrada</option>
                                <option value="2">Saida</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data Inicial</label>
                            <input type="date" class="form-control" name="dataInicio" id="dataInicio" value="<? isset($dataInicio) ? $dataInicio : '' ?>" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Data Final:</label>
                            <input type="date" class=" form-control" name="dataFinal" id="dataFinal" value="<? isset($dataFinal) ? $dataFinal : '' ?>" />
                        </div>
                    </div>
                    <div style="text-align: center;">
                        <button class="btn btn-primary" name="btnPesquisar" onclick=" return ConsultarMovimento();">Pesquisar</button>
                    </div>
                </form>

                <?php if (isset($movs)) { ?>
                    <hr>
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span>Aqui você pode consultar todos os movimentos realizados ou se desejar, excluir.</span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Tipo Movimento</th>
                                                <th>Data</th>
                                                <th>Valor(R$)</th>
                                                <th>Categoria</th>
                                                <th>Empresa</th>
                                                <th>Conta</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php

                                            $total = 0;

                                            for ($i = 0; $i < count($movs); $i++) {
                                                if ($movs[$i]['tipo_movimento'] == 1) {
                                                    $total = $total + $movs[$i]['valor_movimento'];
                                                } else {
                                                    $total = $total - $movs[$i]['valor_movimento'];
                                                }

                                            ?>
                                                <tr>
                                                    <td><?= $i + 1 ?></td>
                                                    <td><?= $movs[$i]['tipo_movimento'] == 1 ? '<strong style="color: #006400;">Entrada</strong>' : '<strong style="color: #ff0000;">Saída</strong>' ?></td>
                                                    <td><?= $movs[$i]['data_movimento'] ?></td>
                                                    <td>R$ <?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?></td>
                                                    <td><?= $movs[$i]['nome_categoria'] ?></td>
                                                    <td><?= $movs[$i]['nome_empresa'] ?></td>
                                                    <td><?= $movs[$i]['banco_conta'] ?> | N. Agen: <?= $movs[$i]['agencia_conta'] ?> | N. Conta: <?= $movs[$i]['numero_conta'] ?> | Saldo: R$ <?= number_format($movs[$i]['saldo_conta'], 2, ',', '.') ?></td>
                                                    <td><?= $movs[$i]['obs_movimento'] ?></td>
                                                    <td>
                                                        <a href="#" class="btn btn-danger" data-toggle="modal" data-target="#myModal<?= $i ?>">Excluir</a>

                                                        <form action="consultar_movimento.php" method="POST">
                                                            <input type="hidden" name="idMov" value="<?= $movs[$i]['id_movimento'] ?>">
                                                            <input type="hidden" name="idConta" value="<?= $movs[$i]['id_conta'] ?>">
                                                            <input type="hidden" name="tipo" value="<?= $movs[$i]['tipo_movimento'] ?>">
                                                            <input type="hidden" name="valor" value="<?= $movs[$i]['valor_movimento'] ?>">

                                                            <div class="modal fade" id="myModal<?= $i ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header">
                                                                            <button type="button" class="close" data-dimiss="modal aria-hidden=" true">&times;</button>
                                                                            <h4 class="modal-title" id="myModalLabel">Você deseja realmente excluir esse Movimento Financeiro?</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <strong>Tipo do Movimento: </strong><span><?= $movs[$i]['tipo_movimento'] == 1 ? '<strong style="color: #006400;">Entrada</strong>' : '<strong style="color: #ff0000;">Saída</strong>' ?></span>
                                                                            <br>
                                                                            <strong>Data: </strong><span><?= $movs[$i]['data_movimento'] ?></span>
                                                                            <br>
                                                                            <strong>Valor: </strong> <span><?= number_format($movs[$i]['valor_movimento'], 2, ',', '.') ?></span>
                                                                            <br>
                                                                            <strong>Nome da Categoria: </strong><span><?= $movs[$i]['nome_categoria'] ?></span>
                                                                            <br>
                                                                            <strong>Nome da Empresa: </strong><span><?= $movs[$i]['nome_empresa'] ?></span>
                                                                            <br>
                                                                            <strong>Conta Bancária: </strong><span><?= $movs[$i]['banco_conta'] ?> | N. Agen: <?= $movs[$i]['agencia_conta'] ?> | N. Conta: <?= $movs[$i]['numero_conta'] ?> | Saldo: R$ <?= number_format($movs[$i]['saldo_conta'], 2, ',', '.') ?></span>
                                                                            <br>
                                                                            <strong>Observação do Movimento: </strong><span><?= $movs[$i]['obs_movimento'] ?></span>
                                                                        </div>
                                                                        <div class="modal-footer">
                                                                            <button type="button" class="btn btn-warning" data-dimiss="modal">Não</button>
                                                                            <button type="submit" class="btn btn-danger" name="btnExcluir">Sim</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                    <div style="text-align: center;">
                                        <strong>Total: </strong>
                                        <span style="color: <?= $total, 0 ? '#ff0000' : '#006400' ?>">
                                            <strong>R$ <?= number_format($total, 2, ',', '.') ?></strong>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    </div>
            </div>
        </div>
</body>

</html>