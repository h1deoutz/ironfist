<?php

$nome_completo = $_GET ['nome_completo'];
$CPF = $_GET ['CPF'];
$data_nascimento = $_GET ['data_nascimento'];
$CEP_CNPJ = $_GET ['CEP_CNPJ']
$endereco = $_GET ['endereco']
$cidade = $_GET ['cidade']
$UF = $_GET ['UF']
$genero = $_GET ['genero']

    include 'connect.php';
        $sql = "INSERT INTO cad_user (nome_completo, CPF, data_nascimento, CEP_CNPJ, endereco, cidade, UF, genero)
        VALUES ('$nome_completo', '$CPF', '$data_nascimento', '$CEP_CNPJ', '$endereco', '$cidade', '$UF', '$genero')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
  }     else {
        echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>