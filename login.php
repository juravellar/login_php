<?php
session_start();
include("config.php");

header('Content-Type: application/json');

$usuario = $_POST['usuario'] ?? '';
$senha = $_POST['senha'] ?? '';

$sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}'";
$res = $conn->query($sql);

if ($res->num_rows > 0) {
    $row = $res->fetch_object();
    if (password_verify($senha, $row->senha)) {
        $_SESSION['usuario'] = $row->usuario;
        $_SESSION['nome'] = $row->nome;
        echo json_encode(['status' => 'ok']);
    } else {
        echo json_encode(['status' => 'erro', 'msg' => 'Senha incorreta.']);
    }
} else {
    echo json_encode(['status' => 'erro', 'msg' => 'Usuário não encontrado.']);
}
