<?php
  session_start();
  include("config.php");
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sistema de Login</title>
  <link rel="stylesheet" href="css/bootstrap.min.css"> 
  
  <style>
    body{
      background-color: #F2F2F2;
    }

    .login{
      width: 100%;
      height: 100vh;
      align-items: center;
      justify-content: center;
      display: flex;
    }
  </style>      
</head>
<body>
  <div class="login">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 offset-lg-4">
          <div class="card">
            <div class="card-body">

              <?php
                switch(@$_REQUEST['page']){
                  case 'novo':
                    include("novo-usuario.php");
                    break;
                  case 'salvar':
		                include("salvar-usuario.php");
		                break;
		              case 'dashboard':
		                include("dashboard.php");
		                break;
                  default:
                    ?>
                      <h3>Acesso Restrito</h3>
                      <form action="login.php" method="POST">
                        <div class="mb-3">
                          <label>Usuário</label>
                          <input type="text" name="usuario" class="form-control">
                        </div>
                        <div class="mb-3">
                          <label>Senha</label>
                          <input type="password" name="senha" class="form-control">
                        </div>
                        <div class="mb-3 text-center">
                          <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                        <div class="text-center">
                          <p class="mb-0">Não tem uma conta?
                            <a href="?page=novo" class="text-decoration-none">Cadastre-se</a>
                          </p>
                        </div>
                      </form>
                    <?php
                    break;
                }
              ?>

            </div>  
          </div>
        </div>
      </div>
    </div>
  </div>

  <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
