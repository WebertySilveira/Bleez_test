<!DOCTYPE html>
<html lang="pt-br">

</html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="styles/style.css">
        
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>Bleez Teste</title>
        <?php 
          require_once "Controller/connect.php";

        ?>

    </head>

    <body>


        
        <div class="container">
            
            <form action="Controller/update.php" method="post">


                      <?php

                      require_once "Controller/connect.php";


                      $id= $_GET['id'];
                      $consulta = $conn->query("SELECT id, nome, preco, descricao, imagem FROM produtos WHERE id=$id"); 

                      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {

                      $id         =  $linha['id'];
                      $nome       =  $linha['nome'];
                      $preco      =  $linha['preco'];
                      $descricao  =  $linha['descricao'];
                      $imagem     =  $linha['imagem'];

                      ?>

            
                <br>
                <h2>Editar Produtos</h2>
                <br>
                <div class="form-row">
                  <div class="col-md-8 mb-3">
                    <label>Nome</label>
                    <input type="text" name="id" value="<?php echo $id ?>" class="form-control"  placeholder="Nome do Produto" style="display:none">
                    <input type="text" name="nome" value="<?php echo $nome ?>" class="form-control"  placeholder="Nome do Produto" required>
                  </div>

                  <div class="col-md-4 mb-3">
                    <label>Preço</label>
                    <input type="text" name="preco" value="<?php echo $preco ?>" min="0" class="form-control" placeholder="Valor do produto" required>
                  </div>
                </div>

                <div class="form-row">
                  <div class="col-md-12 mb-3">
                    <label>Descrição</label>
                    <input type="text" class="form-control" name="descricao" value="<?php echo $descricao ?>" placeholder="Descrição do produto" required rows="3" style="resize: none"></textarea>
                  </div>
                  <div class="col-md-3 mb-3">
                    <label>Imagem</label>
                    <input type="file" name="imagem" value="<?php echo $imagem ?>"  required>
                  </div>
                </div>

                <button class="btn btn-primary" type="submit">Enviar</button>
                <?php } ?>
              </form>
        </div>

        


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>