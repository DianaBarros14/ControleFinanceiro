<?php
require_once '../DAO/UtilDAO.php';
UtilDAO::VerificarLogado();

require_once '../DAO/CategoriaDAO.php';

$dao = new CategoriaDAO();
$categorias = $dao->ConsultarCategoria();


//echo '<pre>';
//print_r($categorias);
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
                        <h2>Cadastrar Categoria</h2>
                        <h5>Aqui você irá cadastrar todas suas Categorias Financeiras. </h5>
                        <?php include_once '_msg.php'; ?>
                    </div>
                </div>
                <hr />
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <span>Categorias Cadastradas. Caso deseje alterar, clique no Botão ALTERAR.</span>
                            </div>
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                        <thead>
                                            <tr>
                                                <th>Qtd.</th>
                                                <th>Nome da Categoria</th>
                                                <th>Ação</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="odd gradeX">
                                                <?php for($i=0; $i<count($categorias); $i++){ ?>
                                                    <th><?= $i+1 ?></th>
                                                <td><?=$categorias[$i]['nome_categoria'] ?></td>
                                                <td>
                                                    <a href="alterar_categoria.php?cod=<?=$categorias[$i]['id_categoria'] ?>" class="btn btn-warning btn-sm">Alterar</a>
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