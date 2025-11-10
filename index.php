<?php 
session_start(); 
include("config.php"); 
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Sistema de Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="assets/js/main.js"></script>
  <style>
    /* Garante que o card nunca fique cortado */
    .login-wrapper {
      min-height: 100vh;
      padding: 2rem 0;
    }
    
    /* Reduz o padding do formulário */
    #conteudo-login {
      padding: 2rem !important;
    }
    
    /* Reduz o tamanho dos inputs */
    #conteudo-login .form-control-lg {
      padding: 0.5rem 1rem;
      font-size: 1rem;
    }
    
    /* Reduz o espaçamento entre campos */
    #conteudo-login .mb-3,
    #conteudo-login .mb-4 {
      margin-bottom: 1rem !important;
    }
    
    /* Reduz o título */
    #conteudo-login h3 {
      font-size: 1.5rem;
      margin-bottom: 1.5rem !important;
    }
    
    /* Ajuste responsivo para telas pequenas */
    @media (max-height: 700px) {
      .login-wrapper {
        padding: 1rem 0;
      }
    }
  </style>
</head>
<body class="bg-light">
  <div class="container login-wrapper d-flex align-items-center justify-content-center">
    <div class="row shadow-lg rounded-4 overflow-hidden my-3" style="max-width: 900px; width: 100%;">
      <!-- IMAGEM LATERAL -->
      <div class="col-md-6 d-none d-md-flex bg-primary justify-content-center align-items-center">
        <img src="assets/img/undraw_enter-password_1kl4.svg" alt="Login" class="img-fluid p-4" style="max-height: 380px;">
      </div>
      <!-- FORMULÁRIO DE LOGIN -->
      <div id="conteudo-login" class="col-md-6 bg-white p-5 d-flex flex-column justify-content-center">
        <h3 class="text-center mb-4 fw-bold text-primary">Acesso Restrito</h3>
        <form id="formLogin">
          <div class="mb-3">
            <label class="form-label">Usuário</label>
            <input type="text" name="usuario" class="form-control form-control-lg" placeholder="Digite seu usuário" required>
          </div>
          <div class="mb-4">
            <label class="form-label">Senha</label>
            <input type="password" name="senha" class="form-control form-control-lg" placeholder="Digite sua senha" required>
          </div>
          <button type="submit" class="btn btn-primary btn-lg w-100">Entrar</button>
          <!-- LINK PARA CADASTRO --> 
          <div class="text-center mt-3"> 
            <p class="mb-0"> Não tem uma conta? 
              <a href="#" class="text-decoration-none text-primary load-page" data-page="novo-usuario.php">Cadastre-se</a>
            </p> 
          </div>
          <div id="msgLogin" class="mt-3 text-center"></div>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>