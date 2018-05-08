<?php
 require_once "../models/CrudAluno.php";
 $crud = new CrudAluno();
?>

<!DOCTYPE html>
  <html >
  
  <head>
    <meta charset="UTF-8">
    <title>Cadastro </title>
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
              <li class="tab active"><a href="#signup">Cadastro</a></li>
              <li class="tab"><a href="../controllers/login.php?acao=logar">Login</a></li>
            </ul></div>

              <div id="signup">
                <h1>Cadastre-se</h1>

                <form action="../controllers/cadastrar.php?acao=cadastrar" method="post">


                    <div class="field-wrap">
                        <label>
                            Nome<span class="req">*</span>
                        </label>
                        <input name="name" type= "text" required autocomplete="off"/>
                    </div>

            </div>

            <div class="field-wrap">
              <label>
                Email <span class="req">*</span>
              </label>
                <input name="email" type= "email" required autocomplete="off"/>

            </div>
            
            <div class="field-wrap">
              <label>
                Senha<span class="req">*</span>
              </label>
                <input name="password" type= "password" required autocomplete="off"/>

            </div>


             <div class="field-wrap">
                  <label>
                    N°Matrícula/N°Servidor<span class="req">*</span>
                  </label>
                 <input name="matricula" type="number" required autocomplete="off" />

             </div>


                    <h2><button class="button" type="submit" Vallue="Enviar" href="">Enviar</h2>
            </form>

          </div>

          
        </div><!-- tab-content -->
        
  </div> <!-- /form -->
   <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

      <script src="js/index.js"></script>

  </body>
  </html> 
