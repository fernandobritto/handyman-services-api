<?php


declare (strict_types=1);

$listarTodos = function() use($conn)
{
    $sql =  "SELECT * FROM produtos";
    $result = mysqli_query($conn, $sql);
    
    $retorno = [];
    
    while($row = mysqli_fetch_assoc($result)){
        $retorno[] = $row;
    }
    
    return $retorno;
    
    
};
    
$pegarProdutorPorId = function() use($conn)
{
    $sql =  "SELECT * FROM produtos WHERE id = $id";
    $result = mysqli_query($conn, $sql);
    
    $row = $result === false ? null : mysqli_fetch_assoc($result);
    
    return $row;
            
};
        