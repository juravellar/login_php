<?php
include("config.php");
$sql = "SELECT * FROM usuarios ORDER BY id";
$res = $conn->query($sql);
?>

<div class="animate__animated animate__fadeIn">
  <div class="d-flex justify-content-between align-items-center mb-4">
    <h2 class="fw-bold text-primary mb-0">Usuários Cadastrados</h2>
    <button class="btn btn-success load-page" data-page="novo-usuario.php">
      + Novo Usuário
    </button>
  </div>

  <div class="table-responsive shadow-sm rounded-3">
    <table class="table table-hover align-middle mb-0">
      <thead class="table-primary">
        <tr>
          <th>#</th>
          <th>Nome</th>
          <th>Email</th>
          <th>Usuário</th>
          <th>Nascimento</th>
          <th class="text-center">Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($row = $res->fetch_object()) { ?>
          <tr>
            <td><?= $row->id ?></td>
            <td><?= htmlspecialchars($row->nome) ?></td>
            <td><?= htmlspecialchars($row->email) ?></td>
            <td><?= htmlspecialchars($row->usuario) ?></td>
            <td><?= date('d/m/Y', strtotime($row->data_nasc)) ?></td>
            <td class="text-center">
              <button class="btn btn-sm btn-outline-primary load-page me-2"
                      data-page="editar-usuario.php?id=<?= $row->id ?>">
                Editar
              </button>
              <button class="btn btn-sm btn-outline-danger btn-excluir"
                      data-id="<?= $row->id ?>">
                Excluir
              </button>
            </td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
  </div>
</div>
