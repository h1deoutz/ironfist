<?php

$nome_completo = $_GET ['nome_completo'];
$CPF = $_GET ['CPF'];
$data_nascimento = $_GET ['data_nascimento'];
$CEP_CNPJ = $_GET ['CEP_CNPJ'];
$endereco = $_GET ['endereco'];
$cidade = $_GET ['cidade'];
$UF = $_GET ['UF'];
$genero = $_GET ['genero'];
$id = $_GET ['id'];

    include 'connect.php';
       // $sql = "INSERT INTO cad_user (nome_completo, CPF, data_nascimento, CEP_CNPJ, endereco, cidade, UF, genero)
       //VALUES ('$nome_completo', '$CPF', '$data_nascimento', '$CEP_CNPJ', '$endereco', '$cidade', '$UF', '$genero', '$id')";
       $sql = "UPDATE cad_user
        SET nome_completo = '$nome_completo', CPF = '$CPF', data_nascimento, CEP_CNPJ = '$CEP_CNPJ', endereco = '$endereco', cidade = '$cidade', UF = '$UF', genero = '$genero'
        WHERE id = '$id'";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
  }     else {
        echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close();
?>
