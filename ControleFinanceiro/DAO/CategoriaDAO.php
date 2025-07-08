<?php

require_once 'Conexao.php';
require_once 'UtilDAO.php';

class CategoriaDAO extends Conexao
{

    public function CadastrarCategoria($nomeCat)
    {
        if ($nomeCat == '') {
            return 0;
        } else {
            // return 1;

            $conexao = parent::retornarConexao();

            $comando_sql = 'insert into tb_categoria
                           (nome_categoria, id_usuario)
                           values (?, ?);';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $nomeCat);
            $sql->bindValue(2, UtilDAO::UsuarioLogado());

            try {
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                echo $ex->getMessage();
                return -1;
            }
        }
    }


    public function ConsultarCategoria()
    {
        $conexao = parent::retornarConexao();

        $comando_sql = 'select id_categoria, 
                        nome_categoria 
                        from tb_categoria 
                        where id_usuario = ?;';

        $sql = new PDOStatement();

        $sql = $conexao->prepare($comando_sql);

        $sql->bindValue(1, UtilDAO::UsuarioLogado());

        $sql->setFetchMode(PDO::FETCH_ASSOC);

        $sql->execute();

        return $sql->fetchALL();
    }


    public function AlterarCategoria($nomeCat, $idCategoria)
    {
        if ($nomeCat == '' || $idCategoria == '') {
            return 0;
        } else {
            $conexao = parent::retornarConexao();

            $comando_sql = 'update tb_categoria 
                                set nome_categoria = ? 
                                where id_categoria = ? 
                                and id_usuario = ?';

            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $nomeCat);
            $sql->bindValue(2, $idCategoria);
            $sql->bindValue(3, UtilDAO::UsuarioLogado());

            try {
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                echo $ex->getMessage();
                return -1;
            }
        }
    }

    public function DetalharCategoria($idCategoria)
    {
        if ($idCategoria == '') {
            return;
        } else {
            $conexao = parent::retornarConexao();

            $comando_sql = 'select id_categoria, 
                        nome_categoria 
                        from tb_categoria 
                        where id_categoria = ? 
                        and id_usuario = ?';


            $sql = new PDOStatement();

            $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $idCategoria);
            $sql->bindValue(2, UtilDAO::UsuarioLogado());


            $sql->setFetchMode(PDO::FETCH_ASSOC);

            $sql->execute();

            return $sql->fetchALL();
        }
    }


public function ExcluirCategoria($idCategoria){
    if($idCategoria == ''){
        return 0;
     }else{
         $conexao = parent::retornarConexao();

             $comando_sql = 'delete from tb_categoria
                             where id_categoria =?
                             and id_usuario =?;';

          $sql = new PDOStatement();

          $sql = $conexao->prepare($comando_sql);

            $sql->bindValue(1, $idCategoria);
            $sql->bindValue(2, UtilDAO::UsuarioLogado());

      try {
                $sql->execute();
                return 1;
            } catch (Exception $ex) {
                echo $ex->getMessage();
                return -4;
            }
        }
    }
}