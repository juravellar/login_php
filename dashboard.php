<?php
session_start();
if (empty($_SESSION)) {
  header("Location: index.php");
  exit;
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8">
  <title>Dashboard</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    const nomeUsuario = "<?= htmlspecialchars($_SESSION['nome']); ?>";
  </script>
  <script src="assets/js/main.js"></script>

  <style>
    body {
      background-color: #f8f9fa;
    }
    .navbar {
      background: linear-gradient(90deg, #007bff, #00bfff);
    }
    .navbar-brand, .nav-link {
      color: #fff !important;
      font-weight: 500;
    }
    .nav-link:hover {
      opacity: 0.85;
    }
    .btn-danger {
      font-weight: 500;
    }
    #conteudo {
      background: #fff;
      border-radius: 1rem;
      padding: 2rem;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.05);
      min-height: 70vh;
      animation: fadeIn 0.4s ease-in-out;
    }
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(10px); }
      to { opacity: 1; transform: translateY(0); }
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg shadow-sm mb-4">
    <div class="container">
      <a class="navbar-brand voltar-home" href="#">
        <i class="bi bi-grid-3x3-gap-fill me-1"></i> Sistema de Cadastro
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarMenu">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a href="#" class="nav-link load-page" data-page="listar-usuarios.php">
              <i class="bi bi-people-fill me-1"></i> Listar
            </a>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link load-page" data-page="novo-usuario.php">
              <i class="bi bi-person-plus-fill me-1"></i> Novo
            </a>
          </li>
          <li class="nav-item">
            <a href="logout.php" class="btn btn-danger ms-lg-3 mt-2 mt-lg-0">
              <i class="bi bi-box-arrow-right me-1"></i> Sair
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container" id="conteudo">
    <h3 class="fw-bold text-primary mb-2">Bem-vindo(a), <?= htmlspecialchars($_SESSION['nome']); ?>!</h3>
    <p class="text-muted">Escolha uma das opções no menu para começar.</p>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
