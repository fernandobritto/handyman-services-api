<?php
include "database/conexao.php";
include "database/consultas.php";
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Carrinho de Compras">
        <meta name="keywords" content="PHP,MySQL,BootStrap">
        <meta name="author" content="Fernando Britto">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
        <title>Carrinho de Compras</title>
    </head>
    <body>
        <div class="container mt-5">
            <ul class="nav">
                <li class="nav-item"><a href="/" class="nav-link">Produtos</a></li>
                <li class="nav-item"><a href="carrinho.php" class="nav-link">Carrinho</a></li>
                
            </ul>
            <h1 class="display-1">Produtos</h1>
            <hr>
            <div class="card-columns">
                <?php
                  $produtos = $listarTodos();
                  foreach ($produtos as $produto):
                ?>
                
                <div class="card">
                    <img src="<?php echo $produto['foto']?>" alt="<?php echo $produto['produto']?>" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title text-center"><?php echo $produto['produto']?></h4>
                        <h5 class="card-text text-danger text-center"> R$ <?php echo number_format($produto['preco'], 2, ",", "."); ?></h5>
                        <a href="gerenciamento.php?acao=adicionar&id=<?php echo $produto['id'] ?>" class="btn btn-success btn-block">
                            <i class="fa fa-shopping-cart">Adicionar ao carrinho</i>
                        </a>
                    </div>
                </div>
                
                <?php endforeach; ?>
                
            </div>

        </div>
    </body>
</html>
