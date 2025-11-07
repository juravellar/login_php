<?php
include("config.php");
$id = $_GET["id"] ?? 0;
$sql = "SELECT * FROM usuarios WHERE id = $id";
$res = $conn->query($sql);
$row = $res->fetch_object();
?>

<h2>Editar Usuário</h2>

<form id="formUsuario" method="POST">
  <input type="hidden" name="acao" value="editar">
  <input type="hidden" name="id" value="<?= $row->id ?>">
  
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" value="<?= $row->nome ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" value="<?= $row->email ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Usuário</label>
    <input type="text" name="usuario" value="<?= $row->usuario ?>" class="form-control">
  </div>
  <div class="mb-3">
    <label>Senha (deixe em branco para não alterar)</label>
    <input type="password" name="senha" class="form-control">
  </div>
  <div class="mb-3">
    <label>Data de nascimento</label>
    <input type="date" name="data_nasc" value="<?= $row->data_nasc ?>" class="form-control">
  </div>
  <div class="mb-3">
    <button type="submit" class="btn btn-primary">Salvar</button>
  </div>
</form>
