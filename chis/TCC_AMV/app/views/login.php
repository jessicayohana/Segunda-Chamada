<!DOCTYPE html>
  <html >
  <head>
    <meta charset="UTF-8">
    <title>Login </title>
    <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
  </head>

      <div id="logo">
        <a href="cadastro.php">
          <img src="../../assets/imagens/logoscc19_2.png">
         </a>
      </div>

        <div class="form">

           <div id="menu"> <ul class="tab-group">
              <li class="tab"><a href="../controllers/cadastrar.php">Cadastro</a></li>
              <li class="tab active"><a href="#login">Login</a></li>
            </ul></div>

           <div id="login">   
            <h1>Bem Vindo!</h1>
            
            <form action="../controllers/login.php?acao2=form" method="post">

              <div class="field-wrap">
              <label>
                Email <span class="req">*</span>
              </label>
              <input name="email" type="email"required autocomplete="off"/>
            </div>
            
            <div class="field-wrap">
              <label>Senha<span class="req">*</span>
              </label>
              <input name="password" type="password"required autocomplete="off"/>
            </div>
            
            <p class="forgot"><a href="esqueceu.php">Esqueceu a senha?</a></p>
            
            <h2><button class="button" type="submit" value="Enviar">Login</a></h2>
            
            </form>

          </div>
          
        </div><!-- tab-content -->
        
  </div> <!-- /form -->
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

  </body>
  </html> 
