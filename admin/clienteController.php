<?php
include_once "../classes/ClienteDAO.php";

if(!isset($_GET['action'])){
    $titulo = "Lista de Clientes";
    $customers = new ClienteDAO();
    $list = $customers->listar();
    include "views/layout/top.php";
    include "views/listaCliente.php"; 
    include "views/layout/footer.php";
}
else{
    switch ($_GET['action']) {
        case 'cadastra':
            $titulo = "Cadastro de Cliente";

            if(!isset($_POST['cadastrar'])){
                include "views/layout/top.php";
                include "views/cadastraCliente.php";
                include "views/layout/footer.php";
            }
            else{ 
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
                    include "views/cadastraCliente.php";
                    include "views/layout/footer.php";                     
                }
                else{ 
                    $bd = new ClienteDAO();
                    if($bd->inserir($novo))
                        header("Location: clienteController.php");                      
                    }
                }
            break;

        case 'altera':
            $titulo = "Alteração de Cliente";
            if(!isset($_POST['alterar'])){ 
                $obj = new ClienteDAO();
                $customer = $obj->buscar($_GET['cod']);
                include "views/layout/top.php";
                include "views/alteraCliente.php";
                include "views/layout/footer.php"; 
            }
            else{ 
                $customer = new Cliente();
                $customer->setNome($_POST['field_name']);
                $customer->setEmail($_POST['field_email']);
                $customer->setTelefone($_POST['field_phone']);
                $customer->setDataNascimento($_POST['field_birth']);
                $customer->setSenha($_POST['field_password']);
                $customer->setConfirmSenha($_POST['field_confirm-password']);
                $customer->setBairro($_POST['field_bairro']);
                $customer->setEndereco($_POST['field_address']);
                $erros = $customer->validate();

                if(count($erros) != 0){ 
                    include "views/layout/top.php";
                    include "views/alteraCliente.php";
                    include "views/layout/footer.php";                     
                }
                else{ 
                    $bd = new ClienteDAO();
                    if($bd->alterar($customer))
                        header("Location: clienteController.php");
                }
            }
            break;

        case 'exclui':
            $bd = new ClienteDAO();
            if($bd->excluir($_GET['cod']))
                header("Location: clienteController.php"); 
            break;
            
        default:
            echo "Ação não permitida";          
    }
}
?>