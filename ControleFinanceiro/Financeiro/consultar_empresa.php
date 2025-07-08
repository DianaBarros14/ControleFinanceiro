<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/EmpresaDAO.php';
$dao = new empresaDAO();
$empresas = $dao->ConsultarEmpresa();

//echo '<pre>';
//print_r($empresas);
//echo '</pre>';

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
                        <h2>Consultar Empresas</h2>
                        <h5>Consulte todas suas Empresas aqui! </h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span>Empresas Cadastradas. Caso deseje alterar, clique no Botão ALTERAR.</span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Qtd</th>     
                                                <th>Nome da Empresa</th>
                                                <th>Telefone/Whatssap</th>
                                                <th>Endereço</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                            <?php for($i=0; $i<count($empresas); $i++){ ?>
                                                    <td><?= $i+1 ?></td>
                                                <td><?=$empresas[$i]['nome_empresa'] ?></td>
                                                <td><?=$empresas[$i]['telefone_empresa'] ?></td>
                                                <td><?=$empresas[$i]['endereco_empresa'] ?></td>
                                                <td> 
                                                    <a href="alterar_empresa.php?cod=<?=$empresas[$i]['id_empresa'] ?>" class="btn btn-warning btn-sm">Alterar</a>
                                                </td>
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