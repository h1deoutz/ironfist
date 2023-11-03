<?php

$preco = $_GET ['preco'];
$produto = $_GET ['produto'];
$img = $_GET ['img'];
$descricao = $_GET ['descricao'];
$categoria = $_GET ['categoria'];
    
include 'connect.php';
        $sql = "INSERT INTO produto (nome_prod, desc_prod, preco, img, categoria)
        VALUES ('$produto', '$descricao', '$preco', '$img', '$categoria')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
  }     else {
        echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();

  

  header("Location: /ironfist/index/estoque.php?");
  

?>
