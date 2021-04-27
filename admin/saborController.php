<?php
include_once "../classes/SaborDAO.php";
if(!isset($_GET['action'])){
    $titulo = "Lista de Sabores";
    $flavors = new SaborDAO();
    $list = $flavors->listar();
    include "views/layout/top.php";
    include "views/listaSabor.php";
    include "views/layout/footer.php";
}
else{
    switch ($_GET['action']) {
        case 'cadastra':
            $titulo = "Cadastro de Sabor";

            if(!isset($_POST['cadastrar'])){
                include "views/layout/top.php";
                include "views/cadastraSabor.php";
                include "views/layout/footer.php";
            }
            else{ 
                $novo = new Sabor();
                $novo->setNome($_POST['field_nome']);
                $novo->setIngredientes($_POST['field_ingredientes']);
                $novo->setNomeImagem($_FILES['field_imagem']['name']);
                $erros = $novo->validate();
                if(count($erros) != 0){ 
                    include "views/layout/top.php";
                    include "views/cadastraSabor.php";
                    include "views/layout/footer.php";                     
                }
                else{ 
                    $destino = "../assets/img/sabores/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        $bd = new SaborDAO();
                        if($bd->inserir($novo))
                            header("Location: saborController.php");
                    }
                    else{
                        $erros[] = "Erro no upload";
                        include "views/layout/top.php";
                        include "views/cadastraSabor.php";
                        include "views/layout/footer.php";                       
                    }
                }
            }
            break;
        
        case 'altera':
            $titulo = "Alteração de Sabor";
            if(!isset($_POST['alterar'])){ 
                $obj = new SaborDAO();
                $sabor = $obj->buscar($_GET['cod']);
                include "views/layout/top.php";
                include "views/alteraSabor.php";
                include "views/layout/footer.php"; 
            }
            else{ 
                $obj = new Sabor();
                $obj->setNome($_POST['field_nome']);
                $obj->setIngredientes($_POST['field_ingredientes']);
                $obj->setNomeImagem($_FILES['field_imagem']['name']);
                $obj->setCodigo($_POST['field_codigo']);
                $erros = $obj->validate();
                if(count($erros) != 0){ 
                    include "views/layout/top.php";
                    include "views/alteraSabor.php";
                    include "views/layout/footer.php";                     
                }
                else{ 
                    $destino = "../assets/img/sabores/".$_FILES['field_imagem']['name']; 
                    if(move_uploaded_file($_FILES['field_imagem']['tmp_name'], $destino)){
                        $bd = new SaborDAO();
                        if($bd->alterar($obj))
                            header("Location: saborController.php"); 
                    }
                    else{
                        $erros[] = "Erro no upload";
                        include "views/layout/top.php";
                        include "views/cadastraSabor.php";
                        include "views/layout/footer.php";                       
                    }
                }
            }
            break;
    
        case 'exclui':
            $bd = new SaborDAO();
            if($bd->excluir($_GET['cod']))
                header("Location: saborController.php"); 

            break;
            
        default:
            echo "Ação não permitida";          
    }
}
?>