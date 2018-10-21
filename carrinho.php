<?php include "carrinho/funcoes.php"; ?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Carrinho de Compras em PHP7">
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
                <li class="nav-item"><a href="index.php" class="nav-link">Produtos</a></li>
                <li class="nav-item"><a href="/" class="nav-link">Carrinho</a></li>
                
            </ul>
            <h1 class="display-1">Carrinho</h1>
            
            <table class="table table-hover table-striped">
                <thead>
                    <tr>
                        <th></th>
                        <th>Produto</th>
                        <th>Valor</th>
                        <th></th>                        
                    </tr>
                </thead>
                <tbody>
                <?php 
                    $carrinho = getCarrinho();
                    if(is_null($carrinho) || count($carrinho) == 0):
                ?> 
                <tr>
                    <td colspan="4" class="bg-info">
                        Nenhum produto no Carrinho
                    </td>
                </tr>
                <?php else:
                    foreach ($carrinho as $item):                
                ?>        
                <tr>
                    <td><img src="<?php echo $item['foto']; ?>" alt="" height="40"></td>
                    <td>
                        <h5><?php echo $item['produto'] ?></h5>
                        <small><?php echo substr($item['descricao'], 0, 200) ?></small>
                    </td>
                    <td>
                        R$ <?php echo number_format($item['preco'], 2, ",", ".") ?>
                    </td>
                    <td>
                        <a href="gerenciamento.php?acao=excluir&id=<?php echo $item['id'] ?>" class="btn btn-danger"><i class="fa fa-trash"></i></a>
                    </td>                        
                </tr>
                <?php endforeach; endif; ?>
                </tbody>
                <?php  if(count($carrinho) > 0): ?>
                <tfoot>
                    <tr>
                        <td colspan="2" class="text-right">
                            Total
                        </td>
                        <td >
                            R$ <?php $total = calcularTotal(); echo number_format($total, 2, ",", ".") ?>
                        </td>
                        
                    </tr>
                    
                    <tr>
                        <td colspan="2" class="text-right">
                            Desconto
                        </td>
                        <td colspan="2">
                            <form action="gerenciamento.php">
                                <input type="hidden" value="aplicar_desconto" name="acao">                                
                                <input type="test" name="desconto" class="form-control" value="<?php echo $_SESSION['desconto'] ?? 0 ?>">
                            </form>                            
                        </td>
                        
                    </tr>
                    <tr>
                        <td colspan="2" class="text-right">
                            <span class="float-left">
                                <a href="gerenciamento.php?acao=limpar_carrinho">Limpar Carrinho</a>
                                
                            </span>
                            Valor Final
                        </td>
                        <td colspan="2">
                            R$ <?php aplicarDesconto($total); echo number_format($total, 2, ",", ".") ?>                           
                        </td>
                        
                    </tr>
                </tfoot>
                <?php endif; ?>
            </table>

        </div>
    </body>
</html>
