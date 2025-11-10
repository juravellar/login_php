<?php include("config.php"); ?>

<div class="animate__animated animate__fadeIn">
  <h3 class="text-center mb-4 fw-bold text-success">Criar Conta</h3>

  <form id="formUsuario">
    <input type="hidden" name="acao" value="cadastrar">

    <div class="mb-3">
      <label class="form-label">Nome</label>
      <input type="text" name="nome" class="form-control form-control-lg" placeholder="Digite seu nome" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control form-control-lg" placeholder="exemplo@email.com" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Usuário</label>
      <input type="text" name="usuario" class="form-control form-control-lg" placeholder="Seu nome de usuário" required>
    </div>

    <div class="mb-3">
      <label class="form-label">Senha</label>
      <input type="password" name="senha" class="form-control form-control-lg" placeholder="Crie uma senha" required>
    </div>

    <div class="mb-4">
      <label class="form-label">Data de Nascimento</label>
      <input type="date" name="data_nasc" class="form-control form-control-lg" required>
    </div>

    <button type="submit" class="btn btn-success btn-lg w-100">Cadastrar</button>
  </form>
</div>
