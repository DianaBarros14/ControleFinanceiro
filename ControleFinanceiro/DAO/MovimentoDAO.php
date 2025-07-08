<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';

class MovimentoDAO extends Conexao
{
    public function RealizarMovimento($tipo, $data, $valor, $obs, $categoria, $empresa, $conta)
    {
        if ($tipo == '' || $data == '' || trim($valor) == '' || $categoria == '' || $empresa == '' || $conta == '') {
            return 0;
        }else{
             $conexao = parent::retornarConexao();
            $comando_sql = 'insert into tb_movimento
                        (tipo_movimento, data_movimento, valor_movimento, obs_movimento, 
                        id_categoria, id_empresa, id_conta, id_usuario)
                        values(?,?,?,?,?,?,?,?) ';

            $sql = new PDOStatement();
            $sql = $conexao->prepare($comando_sql);

            $i = 1;

            $sql->bindValue($i++, $tipo);
            $sql->bindValue($i++, $data);
            $sql->bindValue($i++, $valor);
            $sql->bindValue($i++, $obs);
            $sql->bindValue($i++, $categoria);
            $sql->bindValue($i++, $empresa);
            $sql->bindValue($i++, $conta);
            $sql->bindValue($i++, UtilDAO::UsuarioLogado());

            $conexao->beginTransaction();

            try {
                $sql->execute();

                if ($tipo == 1) {
                    $comando_sql = 'update tb_conta 
                                set saldo_conta = saldo_conta + ?
                                where id_conta = ?; ';
                } else if ($tipo == 2) {
                    $comando_sql = 'update tb_conta
                                set saldo_conta = saldo_conta - ?
                                where id_conta = ?; ';
                }
                $sql = $conexao->prepare($comando_sql);
                $sql->bindValue(1, $valor);
                $sql->bindValue(2, $conta);

                $sql->execute();

                $conexao->commit();

                return 1;
            } catch (Exception $ex) {
                echo $ex->getMessage();
                $conexao->rollback();
                return -1;
            }
        }
    }

    public function ConsultarMovimento($tipoMov, $dataInicio, $dataFinal)
    {
        if ($tipoMov == '' || $dataInicio == '' || $dataFinal == '') {
            return 0;
        } else {
            $conexao = parent::retornarConexao();

            $comando_sql = 'select id_movimento, tb_movimento.id_conta, tipo_movimento,
                            date_format(data_movimento, "%d/%m/%Y") as data_movimento, valor_movimento,
                            nome_categoria, nome_empresa, banco_conta, numero_conta, agencia_conta, saldo_conta,
                            obs_movimento from tb_movimento
                            inner join tb_categoria
                              on tb_categoria.id_categoria = tb_movimento.id_categoria 
                            inner join tb_empresa
                              on tb_empresa.id_empresa = tb_movimento.id_empresa 
                            inner join tb_conta
                              on tb_conta.id_conta = tb_movimento.id_conta 
                            where tb_movimento.id_usuario = ? and tb_movimento.data_movimento between ? and ?';

        if($tipoMov != 0){
            $comando_sql = $comando_sql . 'and tipo_movimento = ?';
        }                    
        
        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::UsuarioLogado());
        $sql->bindValue(2, $dataInicio);
        $sql->bindValue(3, $dataFinal);

        if($tipoMov !=0){
            $sql->bindValue(4, $tipoMov);
        }

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchAll();
    
        }
    }


public function ExcluirMovimento($idMov, $idConta, $tipo, $valor){
    if($idMov == '' || $idConta == '' || $tipo == '' || $valor == ''){
        return 0;
     }else{
        $conexao = parent::retornarConexao();

        $comando_sql = 'delete from tb_movimento
                             where id_movimento = ?;';


        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, $idMov);

        $conexao->beginTransaction();


      try {
                $sql->execute();

                if($tipo == 1){
                    $comando_sql = 'update tb_conta
                                    set saldo_conta = saldo_conta - ?
                                    where id_conta = ?;';
                }else{
                         $comando_sql = 'update tb_conta
                                    set saldo_conta = saldo_conta + ?
                                    where id_conta = ?;';
                }
                
                $sql = $conexao->prepare($comando_sql);

                $sql->bindValue(1, $valor);
                $sql->bindValue(2, $idConta);

                $sql->execute();

                $conexao->commit();

                return 1;

            } catch (Exception $ex) {
                echo $ex->getMessage();

                $conexao->rollback();
                return -1;
            }
        }
    }
    public function TotalEntrada(){
        $conexao = parent::retornarConexao();

        $comando_sql = 'select sum(valor_movimento)
                        as Total 
                        from tb_movimento
                        where tipo_movimento = 1
                        and id_usuario = ?;';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::UsuarioLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql-> fetchALL();
    }

    public function TotalSaida(){
        $conexao = parent::retornarConexao();

        $comando_sql = 'select sum(valor_movimento)
                        as Total 
                        from tb_movimento
                        where tipo_movimento = 2
                        and id_usuario = ?;';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::UsuarioLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql-> fetchALL();
    }

    public function DezUltimosMovimentos(){
        $conexao = parent::retornarConexao();

        $comando_sql = 'SELECT id_movimento, tb_movimento.id_conta, tipo_movimento,
                        DATE_FORMAT(data_movimento, "%d/%m/%Y") AS data_movimento, 
                        valor_movimento, 
                        nome_categoria, 
                        nome_empresa, 
                        banco_conta,
                        numero_conta, 
                        agencia_conta, 
                        saldo_conta, 
                        obs_movimento
                    FROM tb_movimento
                    INNER JOIN tb_categoria
                        ON tb_categoria.id_categoria = tb_movimento.id_categoria
                    INNER JOIN tb_empresa
                        ON tb_empresa.id_empresa = tb_movimento.id_empresa
                    INNER JOIN tb_conta
                        ON tb_conta.id_conta = tb_movimento.id_conta
                    WHERE tb_movimento.id_usuario = ? 
                    ORDER BY tb_movimento.id_movimento DESC 
                    LIMIT 10';


        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::UsuarioLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql-> fetchALL();               
    }
}