<?php  
	session_start();

	if(empty($_SESSION)){
		print "<script>location.href='index.php'</script>";
	}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sistema de Login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css"> 
</head>	
<body>
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
	    <div class="container-fluid">
	        <a class="navbar-brand" href="dashboard.php">Sistema de Cadastro</a>
	        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	          <span class="navbar-toggler-icon"></span>
	        </button>
	        <div class="collapse navbar-collapse" id="navbarSupportedContent">
	          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
	            <li class="nav-item">
	              <a class="nav-link active" aria-current="page" href="dashboard.php">Home</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="?page=novo">Novo Usuário</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="?page=listar">Listar Usuários</a>
	            </li>
	          </ul>
	          <ul class="navbar-nav ms-auto">
		        <li class="nav-item">
		          <?php  
		            print "<a href='logout.php' class='btn btn-danger'>Sair</a>";
		          ?>
		        </li>
		      </ul>
	        </div>
	    </div>
	</nav>

	    <div class="container">
	      <div class="row">
	        <div class="col mt-5">
	          <?php
	            include("config.php");
	            switch(@$_REQUEST['page']){
	              case 'novo':
	                include("novo-usuario.php");
	                break;
	              case 'listar':
	                include("listar-usuarios.php");
	                break;
	              case 'salvar':
	                include("salvar-usuario.php");
	                break;
	              case 'editar':
	                include("editar-usuario.php");
	                break;
	              default:
	                  print("<h1>Bem-vindo(a), ". $_SESSION['usuario'] . "!</h1>");
	            }
	          ?>
	        </div>
	      </div>
	    </div>
</body>
</html>