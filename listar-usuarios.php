<?php
include("config.php");
$sql = "SELECT * FROM usuarios ORDER BY id";
$res = $conn->query($sql);
?>

<h2>Usuários</h2>

<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th>#</th>
      <th>Nome</th>
      <th>Email</th>
      <th>Usuário</th>
      <th>Nascimento</th>
      <th>Ações</th>
    </tr>
  </thead>
  <tbody>
    <?php while ($row = $res->fetch_object()) { ?>
      <tr>
        <td><?= $row->id ?></td>
        <td><?= $row->nome ?></td>
        <td><?= $row->email ?></td>
        <td><?= $row->usuario ?></td>
        <td><?= $row->data_nasc ?></td>
        <td>
          <button class="btn btn-sm btn-primary load-page" data-page="editar-usuario.php?id=<?= $row->id ?>">Editar</button>
          <button class="btn btn-sm btn-danger btn-excluir" data-id="<?= $row->id ?>">Excluir</button>
        </td>
      </tr>
    <?php } ?>
  </tbody>
</table>
