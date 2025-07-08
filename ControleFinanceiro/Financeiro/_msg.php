<?php

    if(isset($_GET['ret'])){
        $ret = $_GET['ret'];
    }

    if(isset($ret)){
        switch ($ret) {
            case 0:
                echo ' <div class="alert alert-warning">
                            Preencher os campos obrigatórios!
                        </div>';
                break;

            case 1:
                echo ' <div class="alert alert-success">
                            Ação realizada com sucesso!
                        </div>';
                break;

            case -1:
                echo ' <div class="alert alert-danger">
                            Ocorreu um erro na operação, tente novamente mais tarde!
                        </div>';
                break;

            case -2:
                echo ' <div class="alert alert-danger">
                            A senha deverá conter no minimo 6 caracteres!
                        </div>';
                break;

            case -3:
                echo ' <div class="alert alert-danger">
                            A senha e o repetir senha não conferem!
                        </div>';
                break;

            case -4:
                echo ' <div class="alert alert-danger">
                            Esse item nao pode ser excluso, pois está em uso!
                        </div>';
                break;

            case -5:
                echo ' <div class="alert alert-danger">
                            Já existe um cadastro com este E-mail!
                        </div>';  
                break;        
            
             case -6:
                echo ' <div class="alert alert-danger">
                            Cadastro inexistente. Nenhum Usuário foi encontrado!
                        </div>';  
                break;          
        }

    }
