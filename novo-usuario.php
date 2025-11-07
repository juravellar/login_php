<?php include("config.php"); ?>

<h3 class="text-center mb-3">Novo Usuário</h3>

<form id="formUsuario">
  <input type="hidden" name="acao" value="cadastrar">
  
  <div class="mb-3">
    <label>Nome</label>
    <input type="text" name="nome" class="form-control" required>
  </div>
  
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control" required>
  </div>
  
  <div class="mb-3">
    <label>Usuário</label>
    <input type="text" name="usuario" class="form-control" required>
  </div>
  
  <div class="mb-3">
    <label>Senha</label>
    <input type="password" name="senha" class="form-control" required>
  </div>
  
  <div class="mb-3">
    <label>Data de Nascimento</label>
    <input type="date" name="data_nasc" class="form-control" required>
  </div>
  
  <div class="text-center mb-3">
    <button type="submit" class="btn btn-success w-100">Cadastrar</button>
  </div>
</form>
