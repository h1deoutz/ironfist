<?php
          include 'connect.php';

        $sql = "SELECT * FROM cad_user";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          echo $row["id"]. ";" . $row["nome"]. ";" . $row["email"]. ";" . $row["senha"]. ";" . $row["CPF"]. ";" . $row["data_de_nascimento"]. ";" . $row["CEP_CNPJ"]. ";" . $row["endereco"]. ";" . $row["cidade"]. ";" . $row["UF"]. ";" . $row["genero"]."<br>";
          }
        }
        ?>