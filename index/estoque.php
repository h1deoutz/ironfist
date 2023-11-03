<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
</head>
<body class="body">
    
    <link rel="stylesheet" href="estoque.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <header>
        <img src="img-svg/ironfist.png" alt="">
        <h2>Estoque de produtos IronFist</h2>
        <button id="add-product">+</button>
    </header>

    
    <div class="product-list">
        <ul>
            <li>
                <p class="id">ID: <h6></h6> </p>
                <p class="name">Nome: <h6></h6> </p>
                <p class="category">Categoria: <h6></h6> </p>
                <p class="price">Preço: <h6></h6> </p>
                <p class="description">Descrição: <h6></h6> </p>
                <p class="image">Imagem: <h6></h6> </p>
                <button>Deletar</button>
            </li>
            
        </ul>
        
        <?php
          include 'connect.php';

        $sql = "SELECT id, nome_prod, desc_prod, preco, img, categoria FROM produto";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          //echo "id: " . $row["id"]. " - Nome: " . $row["nome_prod"]. " " . $row["desc_prod"]. " " .$row["preco"]. "<br>";
          
        
        ?>
        <ul>
            <li>
                <p class="id">ID: <h6><?php echo $row["id"]?></h6> </p>
                <p class="name">Nome: <h6><?php echo $row["nome_prod"]?></h6> </p>
                <p class="category">Categoria: <h6><?php echo $row["categoria"]?></h6> </p>
                <p class="price">Preço: <h6><?php echo $row["preco"]?></h6> </p>
                <p class="description">Descrição: <h6><?php echo $row["desc_prod"]?></h6> </p>
                <p class="image">Imagem: <h6><img src = "<?php echo $row["img"]?>"/></h6> </p>
                <button>Deletar</button>
            </li>
            
        </ul>
        <div class="box">
            <a href="paginas/produto1.php">
            <div class="img-box">
                <img class="images" src="">
            </div></a>
            <div class="bottom">6
              <p></p>
              <h2 class="item-price"></h2><button onclick="addtocart(1)">Comprar</button></div>
            </div>
        </div>
        </div>
        <?php
        }
      } else {
        echo "0 results";
      }
        $conn->close();
        ?>    
    </div>

    <div class="addproduct">
        <div class="title"><h2>Criar novo produto</h2>
        <span id="close"><ion-icon name="close"></ion-icon></span>
    </div>

        <form action="">

            <label for="">Nome:</label>
            <input type="text">

            <label for="">Categoria:</label>
            <select name="" id="">
                <option value="">whey protein</option>
                <option value="">creatina</option>
                <option value="">pre treino</option>
                <option value="">termogenico</option>
                <option value="">glutamina</option>
                <option value="">roupas</option>
                <option value="">acessorios</option>
            </select>

            <label for="">Preço:</label>
            <input type="text">

            <label for="" class="description-input">Descrição:</label>
            <textarea name="" id="" cols="30" rows="6"></textarea>

            <label for="">Imagem:</label>
            <input type="text">

            <button type="submit" id="submitproduct">Adicionar</button>

        </form>
    </div>

    <script src="estoque.js"></script>

    
</body>
</html>