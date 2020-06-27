<?php
    require_once "Connect.php";

    try {

        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $descricao = $_POST['descricao'];
        $imagem = $_POST['imagem'];


        $sql = "INSERT INTO produtos (nome, preco, descricao, imagem)
        VALUES ('$nome', '$preco', '$descricao', '$imagem')";

        $conn->exec($sql);

        header( "Location: ../index.php", true, 303);

    } catch(PDOException $e) {
        header( "Location: ../index.php", true, 303);
    }
?>