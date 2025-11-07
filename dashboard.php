<?php
session_start();
if(empty($_SESSION)) {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Cadastro</title>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
  	const nomeUsuario = "<?= $_SESSION['nome']; ?>";
  </script>
  <script src="assets/js/main.js"></script>

</head>
<body>

<nav class="navbar navbar-expand-lg bg-light shadow-sm">
  <div class="container">
  	<a class="navbar-brand voltar-home" href="#">Sistema de Cadastro</a>
	<ul class="navbar-nav ms-auto">
			<li class="nav-item">
				<a href="#" class="nav-link load-page" data-page="listar-usuarios.php">Listar</a>
			</li>
			<li class="nav-item">
				<a href="#" class="nav-link load-page" data-page="novo-usuario.php">Novo</a>
			</li>
			<li class="nav-item">
				<a href="logout.php" class="btn btn-danger ms-3">Sair</a>
			</li>
		</ul>
  </div>
</nav>

<div class="container mt-4" id="conteudo">
  <h3>Bem-vindo(a), <?= $_SESSION['nome']; ?>!</h3>
  <p>Escolha uma das opções no menu para começar.</p>
</div>

</body>
</html>