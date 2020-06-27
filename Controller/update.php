<?php 

    require_once "connect.php";



    try{

        $id         =  $_POST['id'];
        $nome       =  $_POST['nome'];
        $preco      =  $_POST['preco'];
        $descricao  =  $_POST['descricao'];
        $imagem     =  $_POST['imagem'];


     $sql = "UPDATE produtos SET nome='$nome', preco='$preco', descricao='$descricao', imagem='$imagem' WHERE id = $id";

      // Prepare statement
      $stmt = $conn->prepare($sql);
    
      // execute the query
      $stmt->execute();
    
      header( "Refresh:0; ../index.php", true, 303);
    } catch(PDOException $e) {
      
    }
?>