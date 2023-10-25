<?php

$nome = $_GET ['nome'];
$email = $_GET ['email'];
$senha = $_GET ['senha'];

    include 'connect.php';
        $sql = "INSERT INTO cad_user (nome, email, senha)
        VALUES ('$nome', '$email', '$senha')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
  }     else {
        echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>
