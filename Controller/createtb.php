<?php 
    require_once "connect.php";

    try{
        $sql = "CREATE TABLE IF NOT EXISTS produtos (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(50) NOT NULL,
        preco VARCHAR(30) NOT NULL,
        descricao VARCHAR(300),
        imagem VARCHAR(10000)
        )";
      
        // use exec() because no results are returned
        $conn->exec($sql);

      } catch(PDOException $e) {

      }
?>