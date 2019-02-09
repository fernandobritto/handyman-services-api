<?php

$host = "localhost";
$bd = "db_carrinho";
$user = "root";
$pass = "";

$conn = mysqli_connect($host, $user, $pass, $bd);


// conexão com PDO
//try{	
//	$conn = new \PDO ("mysql:host=localhost;dbname=db_carrinho","root","");
//}catch(\PDOException $e){	
//	echo "Error! Message:".$e->getMessage()." Code:".$e->getCode();	
//}
