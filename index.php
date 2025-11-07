<?php 
session_start(); 
include("config.php"); 
?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <title>Sistema de Login</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="assets/js/main.js"></script>
  </head>
  <body class="bg-light d-flex justify-content-center align-items-center" style="height:100vh;">

    <div class="card p-4 shadow" style="width:350px;">
      <!-- DIV QUE VAI TER O LOGIN OU CADASTRO -->
      <div id="conteudo-login">

        <!-- FORMULÁRIO DE LOGIN -->
        <h3 class="text-center mb-3">Acesso Restrito</h3>
        <form id="formLogin">
          <div class="mb-3">
            <label>Usuário</label>
            <input type="text" name="usuario" class="form-control" required>
          </div>
          <div class="mb-3">
            <label>Senha</label>
            <input type="password" name="senha" class="form-control" required>
          </div>
          <div class="text-center mb-3">
            <button type="submit" class="btn btn-primary w-100">Entrar</button>
          </div>
        </form>

        <!-- LINK PARA CADASTRO -->
        <div class="text-center mt-2">
          <p class="mb-0">
            Não tem uma conta?
            <a href="#" class="text-decoration-none load-page" data-page="novo-usuario.php">Cadastre-se</a>
          </p>
        </div>

        <div id="msgLogin" class="mt-3 text-center"></div>

      </div>
    </div>
  </body>
</html>