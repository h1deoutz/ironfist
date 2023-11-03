<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ironfist.com</title>
    <link rel="stylesheet" href="../css/bootstrap.css">
  </head>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script src="https://kit.fontawesome.com/5a6fff528f.js" crossorigin="anonymous"></script>
        
  <link rel="stylesheet" href="../style.css">
<body class="body">

  <header>
  
    <div class="header" style=" z-index: 2; position: fixed; width: 100%; background-color: #2b0086; height: 48px;" >
        <div class="row align-items-start">
          <div class="col" style="color: #ffffff; font-weight: 500; letter-spacing: px; font-size: 15px; top: 5px; display: flex; justify-content: space-between;" >
           <div  style="padding-left: 40px; padding-top: 13px ">Qualidade internacional comprovada e preço direto da fábrica.</div>

           <div style="padding-right:20px;">
            <a class="btn btn-success" id="login-buttom" role="button" style=" width: 120px ; height: 45px; border-radius: 17px;">
        
              <div  class="login-buttom">
                <span><ion-icon class="login-buttom-icon" name="person-outline"></ion-icon></span><span class="login-buttom-text">Entrar</span>
              </div>
            </a>

            <div class="shopping-cart"> 
              <div class="btn btn-success" role="button" style=" width: 130px ; height: 45px; border-radius: 17px;">
                 <span id="count">0</span>
              <span><ion-icon class="shopping-cart-icon" name="cart-outline"></ion-icon></span><span class="cart-buttom-text">Carrinho</span>
            </div>
            </div>
      

          </header>

            <div class="wrapper">
              <span class="icon-close"><ion-icon name="close-outline"></ion-icon>
              </span>
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

            <div class="form-box register">
              <h2>Cadastrar-se</h2>
              <form action="">
                <div class="input-box">
                  <span class="icon"><ion-icon name="person"></ion-icon></span>
                  <input type="text" required>
                  <label>Usuário</label>
                </div>
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


      <nav class="navbar navbar-expand-lg bg-body-primary">
        <div class="container-fluid">
          <a class="navbar-brand" href="../index.php"><img src="../img-svg/logo.png" alt="" style="width: 250px; margin: 0px 15px; margin-top: 48px; "></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            
            <a href="../index.php"><button>Home</button></a>

            <div id="btns">
            </div>
            
            <section class="searchbar none" >
              <form action="" id="searchbar">
                  <span><ion-icon name="search-outline"></ion-icon></span>
                  <input type="text" id="search-item" placeholder="Pesquisar produtos..." autocomplete="off">
                  
              </form>
              <div class="product-list" id="product-list">
                <div id="root"></div>
              </div>
          </section>

          </div>
        </div>
      </nav>

        <div class="cart">
          <h1>Meu Carrinho</h1>
          
          <div id="cartItem">
            <span><ion-icon class="shopping-cart-icon-empty" name="cart-outline"></ion-icon></span>
            <h4>Seu carrinho está vazio</h4>
          </div>

        <span class="cart-icon-close"><ion-icon name="close-outline"></ion-icon>
          </span>

            <div class="total">
              <h4>Total</h4>
              <h4 id="total">R$0,00</h4>
            </div>
                
          <div class="checkout">
              <div>Checkout</div>
          </div>
        </div>
        </div>

        <div class="checkout-page">
          <div class="step1">

            <form action="">
              <h2>Identificação</h2>

              <div class="input-box2">
                <label for="">Nome completo*</label>
               <input type="text" required>
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
              

                
              <div class="checkbox-gender">
                <h6>Gênero</h6>
              <label for=""><input type="checkbox">Masculino</label>
              <label for=""><input type="checkbox">Feminino</label>
              <label for=""><input type="checkbox">Outro</label>
              </div>
            
            </div>

          </form>

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

                  <button type="submit" class="finish">
                    <span><i class="fa-solid fa-truck-fast"></i></span> 
                    <h6>Finalizar compra</h6>
                  </button> 
                </div>             

                         

            </form>
            
            <div class="back">
              <span><ion-icon name="return-down-back-outline"></ion-icon></span> <h6>Continuar comprando</h6>
            </div>
            
          </div>     

        </div>

        <div class="product-page">

            <img src="../img-svg/ironfist.whey.chocolate.png" class="reponsive" alt="" id="image">

            <div class="product-info">
              <h2>Whey Protein Concentrado IronFist 1Kg</h2>
              <button onclick="changeImage1()">Chocolate</button>
              <button onclick="changeImage2()">Morango</button>
              <button onclick="changeImage3()">Baulinha</button>
              <div class="add"><button onclick='addtocart("+(i++)+")'>Adicionar ao carrinho</button></div>
              <div class="about">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sint, porro, amet fuga est consequatur maiores tempora sapiente eaque hic ea optio quas sed! Fuga odit, facere voluptates commodi error in!</p>
              </div>
            </div>
            
        </div>
        <div class="description">
          <h2>Recomendação de uso</h2>
          <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Hic sequi accusamus earum perspiciatis illum iure nobis facilis deleniti vesaslit nostrum nam, quia nemo itaque esse ut quidem minus aliquam minima.</p>
          <h2>Ingredientes</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat cumque vero deserunt voluptate ipsa dolores, accusantium accusamus rem eaque consequuntur nihil deleniti iste quo repellat ex optio velit nostrum blanditiis!</p>
          <h2>Avertências</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio fuga, ea dignissimos placeat ut doloribus, laboriosam iste explicabo accusamus quibusdam eaque in! Magni perspiciatis repudiandae aliquid magnam quam earum natus!</p>
        </div>

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

        <script src="product1.js"></script>
        <script src="../script.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.js"></script>
        
  </body>
</html>