<?php
include_once("views/layout/top.php");

    if(isset($_GET['action'])){
        if($_GET['action'] == "cadastro"){
            if(!isset($_POST['cadastrar'])){ 
                include "views/cadastro.php";
            }
            else{ 
                include_once("classes/ClienteDAO.php");
                $novo = new Cliente();
                $novo->setNome($_POST['field_name']);
                $novo->setEmail($_POST['field_email']);
                $novo->setTelefone($_POST['field_phone']);
                $novo->setDataNascimento($_POST['field_birth']);
                $novo->setSenha($_POST['field_password']);
                $novo->setConfirmSenha($_POST['field_confirm-password']);
                $novo->setBairro($_POST['field_bairro']);
                $novo->setEndereco($_POST['field_address']);
                $erros = $novo->validate();

                if(count($erros) != 0){ 
                    include "views/layout/top.php";
                    include "views/cadastro.php";
                    include "views/layout/footer.php";                     
                }
                else{ 
                    $bd = new ClienteDAO();
                    if($bd->inserir($novo)){
                        header("Location: index.php?action=cadastro");                      
                    }
                }
            }
        }
        else{
            include_once("views/{$_GET['action']}.php"); 
        }
    }
    else{
        include_once("views/inicio.php");
    }
    
include_once("views/layout/footer.php");
?>