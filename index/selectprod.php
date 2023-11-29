<?php
          include 'connect.php';

        $sql = "SELECT id, nome_prod, desc_prod, preco, img FROM produto";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          echo $row["id"].";" . $row["nome_prod"]. "; " . $row["desc_prod"]. " ;" .$row["preco"]. "<br>";
        
        }
      } 
        $conn->close();
        ?>