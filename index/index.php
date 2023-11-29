<!--! O head contem inforaçôes importantes para o código, como por exemplo, a versâo utilizada do HTML, os links para CSS, JavaScript, Bootstrap, o tìtulo da pagina web etc..  -->
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ironfist.com</title
    <link rel="stylesheet" href="css/bootstrap.css">
  </head>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://kit.fontawesome.com/5a6fff528f.js" crossorigin="anonymous"></script>  
        
        <!-- Link que conecta o HTML ao CSS -->

  <link rel="stylesheet" href="style.css">


<body  class="body">

    <!-- O Header é o cabeçalho da página web !--> 

  <header>
  
    <div class="header"  style=" z-index: 2; position: fixed; width: 100%; background-color: #2b0086; height: 48px;" >
        <div class="row align-items-start">
          <div class="col" style="color: #ffffff; font-weight: 500; letter-spacing: px; font-size: 15px; top: 5px; display: flex; justify-content: space-between;" >
           <div  style="padding-left: 40px; padding-top: 13px ">Qualidade internacional comprovada e preço direto da fábrica.</div>

           <div style="padding-right:20px;">
            <a class="btn btn-success" id="login-buttom" role="button" style=" width: 120px ; height: 45px; border-radius: 17px;">
        
            <!--  Botao que aciona o formulario de login -->
            
              <div  class="login-buttom">
                <span><ion-icon class="login-buttom-icon" name="person-outline"></ion-icon></span><span class="login-buttom-text">Entrar</span>
              </div>
            </a>

            <!-- Botao que aciona o carrinho -->

            <div class="shopping-cart"> 
              <div class="btn btn-success" role="button" style=" width: 130px ; height: 45px; border-radius: 17px;">
                 <span id="count">0</span>
              <span><ion-icon class="shopping-cart-icon" name="cart-outline"></ion-icon></span><span class="cart-buttom-text">Carrinho</span>
            </div>
            </div>
      

          </header>

          <!-- Popup de login -->

            <div class="wrapper">
              <span class="icon-close"><ion-icon name="close-outline"></ion-icon>
              </span>

              <!-- Formulario de login -->

              <div class="form-box login">
              <h2>Entrar</h2>
              <form action="">
                <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" required>
                <label>Email</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></script>
                  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script></span>
                <input type="password" class="input-senha" required>
                <label>Senha</label>
              </div>
              <div class="remember-forgot">
                <label> <input type="checkbox">Lembrar de mim</label>
                <a href="">Esqueci minha senha</a>
              </div>
              <button type="submit" class="submit-button">Entrar</button>
              <div class="login-register">
                <p>Não tem uma conta? <a  href="#" class="register-link"  id="form-register">Cadastrar-se</a></p>
              </div>
              </form>
            </div>

            <!-- Formulario de cadastro -->

            <div class="form-box register">
              <h2>Cadastrar-se</h2>
              <form action="caduser.php">
                <div class="input-box">
                  <span class="icon"><ion-icon name="person"></ion-icon></span>
                  <input type="text" name= "nome"required>
                  <label>Usuário</label>
                </div>
                <div class="input-box">
                <span class="icon"><ion-icon name="mail"></ion-icon></span>
                <input type="email" name="email"required>
                <label>Email</label>
              </div>
              <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></script>
                  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script></span>
                <input type="password" name= "senha" class="input-senha" required>
                <label>Senha</label>
              </div>
              <div class="remember-forgot">
                <label> <input type="checkbox">Concordo com os termos e condições</label>
              </div>
              <button type="submit" class="submit-button">Cadastrar-se</button>
              <div class="login-register">
                <p>Já possui uma conta? <a href="#" class="login-link"  id="login-link"> Entrar</a></p>
              </div>
              </form>
            </div>
        </div>
      </div>

      <!-- Navbar (Com utilizaçao de boostrap) -->

      <nav class="navbar navbar-expand-lg bg-body-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.php"><img src="img-svg/logo.png" alt="" style="width: 250px; margin: 0px 15px; margin-top: 48px; "></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <a href="index.php"><button>Home</button></a>

            <!-- Botoes de filtro de produtos (Uso de JavaScript) -->

            <div id="btns">
            </div>
            
            <!-- Campo de texto da barra dee pesquisa -->

            <section class="searchbar none" >
              <form action="" id="searchbar">
                  <span><ion-icon name="search-outline"></ion-icon></span>
                  <input type="text" id="search-item" placeholder="Pesquisar produtos..." autocomplete="off">

            <!-- Listagem de produtos da barra de pesquisa (JavaScript) -->
                  
              </form>
              <div class="product-list" id="product-list">
                
              </div>
          </section>

          </div>
        </div>
      </nav>

      <!-- Carrossel (Bootrtrap) -->

      <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel" style="margin-top: 10px; box-shadow: 10px 10px 10px 10px rgb(255, 255, 255);"> 
        <div class="carousel-inner">
          <div class="carousel-item active">
           <picture> <source media="(max-width: 800px )" srcset="img-svg/ironfist-banner1.jpg" type=""><img src="img-svg/1.PNG" class="d-block w-100" alt="..." style=" height: 700px ;"></picture>
          </div>
          <div class="carousel-item active">
            <picture> <source media="(max-width: 800px )" srcset="img-svg/logo.png" type=""><img src="img-svg/1.PNG" class="d-block w-100" alt="..." style=" height: 700px ;" ></picture>
           </div>
           <div class="carousel-item active">
            <picture> <source media="(max-width: 800px )" srcset="img-svg/logo.png" type=""><img src="img-svg/1.PNG" class="d-block w-100" alt="..." style=" height: 700px ;"></picture>
           </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <!-- Banner frete gratis -->

      <div class="banner-frete">
        <img src="img-svg/caixa-ironfist.gif" alt="">
        <div class="text"><h2>Frete grátis para compras acima de R$100,00</h2></div>
      </div>

      <div class="textbanner">
        <h1>Qual o seu objetivo?</h1> <br>
      </div>

      <div class="banners">
        <div class="card card1">
          <h5>Emagrecimento</h5>
        </div>
        <div class="card card2">
          <h5>Alta Performance</h5>
        </div>
        <div class="card card3">
          <h5>Ganho de massa</h5>
      </div>
      <div class="card card4">
        <h5>Saúde</h5>
    </div>
    </div>

    <!-- Div que traz os produtos do PHP -->

      <div class="container">
        <div id="root"></div>
        <div>
        <?php
          include 'connect.php';

        $sql = "SELECT id, nome_prod, desc_prod, preco, img, categoria FROM produto";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          // output data of each row
          while($row = $result->fetch_assoc()) {
          //echo "id: " . $row["id"]. " - Nome: " . $row["nome_prod"]. " " . $row["desc_prod"]. " " .$row["preco"]. "<br>";
          
        
        ?>
        <div class="box">
            <a href="paginas/produto1.php">
            <div class="img-box">
                <img class="images" src="<?php echo $row["img"]?>">
            </div></a>
            <div class="bottom">
              <p><?php echo $row["nome_prod"]?></p>
              <h2 class="item-price"><?php echo $row["preco"]?></h2><button onclick="addtocart(1)">Comprar</button></div>
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

        <!-- Div carrinho (JavaScript) -->

        <div class="cart">
          <h1>Meu Carrinho</h1>
          
          <div id="cartItem">
            <span><ion-icon class="shopping-cart-icon-empty" name="cart-outline"></ion-icon></span>
            <h4>Seu carrinho está vazio</h4>
          </div>

        <span class="cart-icon-close"><ion-icon name="close-outline"></ion-icon>
          </span>

          <!-- Valor total da compra -->

            <div class="total">
              <h4>Total</h4>
              <h4 id="total">R$0,00</h4>
            </div>
                
          <!-- Botao de checkout -->

          <div class="checkout">
              <div>Checkout</div>
          </div>
        </div>
        </div>

        <!-- Pagina de checkout -->

        <div class="checkout-page">
          <div class="step1">

          <!-- Formulario de identificaçao de cliente -->

            <form action="">
              <h2>Identificação</h2>

              <div class="input-box2">
                <label for="">Nome completo*</label>
               <input type="text" name="nome_completo" required>
              </div>
              

              <div class="input-box2">
                <label for="">CPF*</label>
                <input id="cpf" type="text" autocomplete="off"  required maxlength="14" placeholder="____ . ____ .  ____ - ___">
              </div>
             
               
              <div class="input-box2">
                <label for="">Data de Nascimento*</label>
               <input type="text" required id="data" maxlength="10" placeholder="___  / ___  / ______">
              </div> 
 
               
              <div class="input-box2">
                <label for="">Cep*</label>
               <input class="phone" id="cep" maxlength="9" required type="text" placeholder="_______ - ____"> 
              </div>


              <div class="input-box2">
                <label for="">Endereço*</label>
               <input class="phone" required type="text"> 
              </div>


              <div class="input-box2">
                <label for="">Cidade*</label>
               <input class="phone" required type="text" > 
              </div>


              <div class="input-box2">
                <label for="">Estado*</label>
               <input class="phone" required type="search"> 
              </div>
            
            </div>

          </form>

          <!-- Seleçao de pagamento -->

          <div class="step2">
            <form action="">
              <h2>Pagamento</h2>
             <div class="step2-payment-method">
              <h6>Escolha a forma de pagamento</h6>
              <div class="payment" id="credit-card">
                <span><ion-icon name="card"></ion-icon></span> <p>Cartão de crédito</p>
              </div> 
              <div class="payment">
                <span><ion-icon name="qr-code-outline"></ion-icon></span> <p>Pix à vista</p>
              </div>
              <div class="payment">
                <span><i class="fa-solid fa-barcode"></i></span> <p>Boleto à vista</p> 
              </div>             
              </div>

              <!-- Formulario pra opçao cartao de credito -->
              
              <div class="credit-card">

                <div class="credit-card-header">
                  <div class="credit-card-title">
                    <span><ion-icon name="card"></ion-icon></span> <h6>
                      Cartão de crédito
                    </h6>
                  </div>
                  <div class="alterar" id="alterar"><p>Alterar forma de pagamento</p></div>
                </div>

                <div class="safe">
                  <span><i class="fa-solid fa-lock"></i></span> <p>Este é um pagamento seguro, realizado em ambiente criptografado.</p>
                </div>

                <div class="input-box2">
                  <label for="">Número do cartão de crédito*</label>
                  <input type="text" id="card-number" maxlength="19" required autocomplete="off" placeholder="_____ . _____ . _____ . _____">
                </div>

                <div class="input-box2">
                  <label for="">Nome impresso no cartão*</label>
                  <input type="text" required autocomplete="off">
              </div>

              <div class="input-box2">
                <label for="">CPF do títular*</label>
                <input  required id="cepeefi" type="text" autocomplete="off" maxlength="14" placeholder="____ . ____ .  ____ - ___">
              </div>

              <div class="valiade-cvv">
                <div class="validade">
                  
                  <div class="input-box2">
                    <label for="">Validade*</label>
                  <input type="text" maxlength="10" id="validade" required placeholder="dd/mm/aaaa">
                  </div>

                  <div class="input-box2">
                    <label for="">CVV/CVC*</label>
                    <input type="text" id="CVV" placeholder="***"  required maxlength="4">
                  </div>  

                </div>
                
                  </div>

                  <!-- Botao de finalizar compra -->

                  <button type="submit" class="finish">
                    <span><i class="fa-solid fa-truck-fast"></i></span> 
                    <h6>Finalizar compra</h6>
                  </button> 
                </div>             

                         

            </form>

            <!-- Botao continuar comprando -->
            
            <div class="back">
              <span><ion-icon name="return-down-back-outline"></ion-icon></span> <h6>Continuar comprando</h6>
            </div>
            
          </div>     

        </div>

        <!-- Rodapé do site -->

        <footer>
          <div class="footer-content">
            <div class="footer-contacts">
             <img src="img-svg/ironfist.png" alt=""> 
             <p>Since 2019 and stronger every year.</p>

             <div class="footer-social-media">
              <a href="#" class="footer-link" id="instagram">
                <i class="fa-brands fa-instagram"></i>
            </a>

            <a href="#" class="footer-link" id="facebook">
               <i class="fa-brands fa-facebook-f"></i>
            </a>

            <a href="#" class="footer-link" id="whatsapp">
              <i class="fa-brands fa-whatsapp"></i>
           </a>
             </div>
            </div>

            <ul class="footer-list">
              <li>
                <h3>Blog</h3>
              </li>
              <li>
                <a href="#" class="footer-link">Tech</a>
              </li>
              <li>
                <a href="#" class="footer-link">Adventures</a>
              </li>
              <li>
                <a href="#" class="footer-link">Music</a>
              </li>
            </ul>

            <ul class="footer-list">
              <li>
                <h3>Products</h3>
              </li>
              <li>
                <a href="#" class="footer-link">App</a>
              </li>
              <li>
                <a href="#" class="footer-link">Desktop</a>
              </li>
              <li>
                <a href="#" class="footer-link">Cloud</a>
              </li>
            </ul>

            <div class="footer-subscribe">
              <h3>Inscreva-se</h3>

              <p>Digite seu email para receber mais notícias</p>

              <div class="input-group">
                <input type="email" id="email" placeholder="Digite seu email">
                
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            &#169
            2023 todos os direitos reservados
          </div>
        </footer>

        <!-- Links para o JavaScript e Jquery -->
        
        <script src="script.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
        
  </body>
</html>