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
                $produto = $pegarProdutorPorId($id);
                adicionarProdutoCarrinho($produto);
                header("location:carrinho.php");
            }
    }      
    
}else{
    die("Ação Invalida!");
}

