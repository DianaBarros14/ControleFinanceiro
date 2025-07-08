<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/ContaDAO.php';

$objDAO = new ContaDAO();
$contas = $objDAO->ConsultarConta();


//echo '<pre>';
//print_r($contas);
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
                        <h2>Consultar Contas</h2>
                        <h5>Consulte todas suas contas Bancárias aqui!. </h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span>Contas Bancárias Cadastradas. Caso deseje alterar, clique no Botão ALTERAR.</span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Qtd.</th>
                                                <th>Nome do Banco</th>
                                                <th>Número da Agência</th>
                                                <th>Número da Conta</th>
                                                <th>Saldo (R$)</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            
                                            <?php for($i=0; $i<count($contas); $i++){ ?>
                                                <tr>
                                                <td><?= $i+1 ?></td>
                                                <td><?=$contas[$i]['banco_conta'] ?></td>
                                                <td><?=$contas[$i]['agencia_conta'] ?></td>
                                                <td><?=$contas[$i]['numero_conta'] ?></td>
                                                <td>R$ <?= number_format($contas[$i]['saldo_conta'], 2, ',', '.') ?></td>
                                                <td><a href="alterar_conta.php?cod=<?= $contas[$i]['id_conta'] ?>" class="btn btn-warning">Alterar</a></td>
                                            </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>