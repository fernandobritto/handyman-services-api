<?php

declare(strict_types=1);

// Iniciando a Sessão no PHP
if (session_status() == PHP_SESSION_NONE){
    session_start();
}

include "database/conexao.php";
include "database/consultas.php";

$acoes_permitidas = [
    'adicionar', 
    'excluir',
    'aplicar_desconto',
    'limpar_carrinho'
];

function validaAcaoCarrinho(string $acao): bool
{
    global $acoes_permitidas;
    if(in_array($acao ,$acoes_permitidas)){
        return true;
    }
    return false;
}


function adicionarProdutoCarrinho(array $produto): bool
{
    if(!existeProduto((int)$produto['id'])){
        $_SESSION['carrinho'][] = $produto;
        return true;
        
    }
    return false;
}

function existeProduto(int $id): bool
{
    if(isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0)
    {
        foreach ($_SESSION['carrinho'] as $item){
            if($item['id'] == $id){
                return true;
            }            
        }
    }
    return false;
}
    

function getCarrinho()
{
    return $_SESSION['carrinho'] ?? null;
}

function excluirProdutoCarrinho(int $id): bool
{
    if(isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0)
    {
        foreach ($_SESSION['carrinho'] as $i => $item){
            if($item['id'] == $id){
            unset($_SESSION['carrinho'][$i]);    
                return true;
            }            
        }
    }
    return false;
}

function calcularTotal(): float
{
    $total = .0; 
    if(isset($_SESSION['carrinho']) && count($_SESSION['carrinho']) > 0)
    {
        foreach ($_SESSION['carrinho'] as $i => $item){
             $total += $item['preco'];      
        }
    }
    
    return $total;
}


function aplicarDesconto(float &$valor)
{
    $pct = $_SESSION['desconto'] ?? 0;
    $valor = $valor - ($valor * ($pct / 100));
}

function limparCarrinho(): void
{
    unset($_SESSION['carrinho']);
    unset($_SESSION['desconto']);
}
    
