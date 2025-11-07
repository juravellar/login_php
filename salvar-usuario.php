<?php
include("config.php");

header('Content-Type: application/json');

$acao = $_POST['acao'] ?? '';
$resposta = ['status' => 'erro', 'msg' => 'Ação inválida.'];

switch($acao) {
  case 'cadastrar':
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);
    $data_nasc = $_POST['data_nasc'];

    $sql = "INSERT INTO usuarios (nome, email, usuario, senha, data_nasc) 
            VALUES ('$nome', '$email', '$usuario', '$senha', '$data_nasc')";
    $ok = $conn->query($sql);

    $resposta = $ok 
      ? ['status' => 'ok', 'msg' => 'Cadastrado com sucesso!']
      : ['status' => 'erro', 'msg' => 'Erro ao cadastrar!'];
    break;

  case 'editar':
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $usuario = $_POST['usuario'];
    $data_nasc = $_POST['data_nasc'];
    $senha = $_POST['senha'] ?? '';

    if (!empty($senha)) {
      $senha = password_hash($senha, PASSWORD_DEFAULT);
      $sql = "UPDATE usuarios SET 
                nome='$nome', email='$email', usuario='$usuario', senha='$senha', data_nasc='$data_nasc'
              WHERE id=$id";
    } else {
      $sql = "UPDATE usuarios SET 
                nome='$nome', email='$email', usuario='$usuario', data_nasc='$data_nasc'
              WHERE id=$id";
    }
    $ok = $conn->query($sql);
    $resposta = $ok 
      ? ['status' => 'ok', 'msg' => 'Editado com sucesso!']
      : ['status' => 'erro', 'msg' => 'Erro ao editar!'];
    break;

  case 'excluir':
    $id = $_POST['id'];
    $ok = $conn->query("DELETE FROM usuarios WHERE id=$id");
    $resposta = $ok 
      ? ['status' => 'ok', 'msg' => 'Excluído com sucesso!']
      : ['status' => 'erro', 'msg' => 'Erro ao excluir!'];
    break;
}

echo json_encode($resposta);
