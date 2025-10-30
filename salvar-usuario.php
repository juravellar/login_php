<?php  
	switch($_REQUEST['acao']){
		case 'cadastrar':
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$usuario = $_POST['usuario'];
			$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
			$data_nasc = $_POST['data_nasc'];

			$sql = "INSERT INTO usuarios (nome, email, usuario, senha, data_nasc) VALUES ('{$nome}', '{$email}', '{$usuario}', '{$senha}', '{$data_nasc}')";

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Cadastrado com sucesso!');</script>";
				print "<script>location.href='?page=dashboard';</script>";
			} else {
				print "<script>alert('Não foi possível cadastrar!');</script>";
				print "<script>location.href='?page=dashboard';</script>";
			}
			break;

		case 'editar':
			$nome = $_POST['nome'];
			$email = $_POST['email'];
			$usuario = $_POST['usuario'];
			$data_nasc = $_POST['data_nasc'];

			if (!empty($_POST['senha'])) {
		        $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
		        $sql = "UPDATE usuarios SET 
		                    nome='{$nome}',
		                    email='{$email}',
		                    usuario='{$usuario}',
		                    senha='{$senha}',
		                    data_nasc='{$data_nasc}'
		                WHERE id=".$_REQUEST["id"];
		    } else {
		        $sql = "UPDATE usuarios SET 
		                    nome='{$nome}',
		                    email='{$email}',
		                    usuario='{$usuario}',
		                    data_nasc='{$data_nasc}'
		                WHERE id=".$_REQUEST["id"];
		    }

			$res = $conn->query($sql);

			if ($res==true) {
				print "<script>alert('Editado com sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";
			} else {
				print "<script>alert('Não foi possível editar!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
			break;
			
		case 'excluir':

			$sql = "DELETE FROM usuarios WHERE id=".$_REQUEST["id"];

			$res = $conn->query($sql);
			
			if ($res==true) {
				print "<script>alert('Excluído com sucesso!');</script>";
				print "<script>location.href='?page=listar';</script>";
			} else {
				print "<script>alert('Não foi possível excluir!');</script>";
				print "<script>location.href='?page=listar';</script>";
			}
			break;
	}
?>