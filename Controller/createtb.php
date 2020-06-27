<?php 
    require_once "connect.php";

    try{
        $sql = "CREATE TABLE IF NOT EXISTS produtos (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL,
        preco VARCHAR(30) NOT NULL,
        descricao VARCHAR(50),
        imagem VARCHAR(50)
        )";
      
        // use exec() because no results are returned
        $conn->exec($sql);
      } catch(PDOException $e) {

      }
?>