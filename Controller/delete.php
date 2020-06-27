<?php
    require_once "connect.php";

    $id = $_GET['id'];

   try{ 
    $sql = "DELETE FROM produtos WHERE id=$id";

    $conn->exec($sql);
    header( "Location: ../index.php", true, 303);
  } catch(PDOException $e) {

  }