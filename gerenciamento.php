<?php

include "carrinho/funcoes.php";

$acao = $_GET['acao'];

if(validaAcaoCarrinho($acao)){
    $id = isset($_GET['id']) ? (int)$_GET['id'] : false;
    switch($acao){
        case "adicionar":
            if(!is_int($id) || $id == 0){
                die("Parâmetro Invalido!");
            }else{
                $produto = $pegarProdutoPorId($id);
                adicionarProdutoCarrinho($produto);
                header("location:carrinho.php");
            }
            break;
            
            
         case "excluir":
            if(!is_int($id) || $id == 0){
                die("Parâmetro Invalido!!!");
            }else{   
                excluirProdutoCarrinho($id);
                header("location:carrinho.php");
            }
            break;
            
            
          case "aplicar_desconto":
            $desc = isset($_GET['desconto']) ? (int)$_GET['desconto'] : 0;
            $_SESSION['desconto'] = $desc;
            header("location:carrinho.php");            
            break;
        
        
        case "limpar_carrinho":
            limparCarrinho();
            header("location:/");            
            break;
        
        
        default:
            die("Opção Invalida!");
    }      
    
}else{
    die("Ação Invalida!");
}

