<?php  
session_start();
include('config.php');

if (empty($_POST) || empty($_POST["usuario"]) || empty($_POST["senha"])) {
    print "<script>location.href='index.php';</script>";
    exit;
}

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM usuarios WHERE usuario = '{$usuario}'";
$res = $conn->query($sql) or die($conn->error);

if ($res->num_rows > 0) {
    $row = $res->fetch_object();

    if (password_verify($senha, $row->senha)) {
        $_SESSION['usuario'] = $row->usuario;
        $_SESSION['nome'] = $row->nome;

        print "<script>location.href='dashboard.php';</script>";
    } else {
        print "<script>alert('Senha incorreta.');</script>";
        print "<script>location.href='index.php';</script>";
    }
} else {
    print "<script>alert('Usuário não encontrado.');</script>";
    print "<script>location.href='index.php';</script>";
}
?>
