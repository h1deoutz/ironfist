<?php
          include 'connect.php';

        $sql = "SELECT id, nome_prod, desc_prod, preco, img, categoria FROM produto";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
            echo "{\"id\":".$row["id"].",\"name\": \"". $row["nome_prod"]."\",\"price\":" .$row["preco"]."image\": \"".$row["img"]."\",\"category\":\"".$row["categoria"]."\",\"link\": \"paginas/produto1.php\"} </br>";  
        
        }
      } 
        $conn->close();
        ?>