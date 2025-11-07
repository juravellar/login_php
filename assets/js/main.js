$(function() {

  // === LOGIN ===
  $("#formLogin").on("submit", function(e) {
    e.preventDefault();
    $.post("login.php", $(this).serialize(), function(retorno) {
      if (retorno.status === "ok") {
        window.location.href = "dashboard.php";
      } else {
        $("#msgLogin").html(`<div class='alert alert-danger'>${retorno.msg}</div>`);
      }
    }, "json");
  });

  // === CARREGAR COMPONENTES ===
  $(document).on("click", ".load-page", function(e) {
    e.preventDefault();
    let page = $(this).data("page");
    $("#conteudo").load(`${page}`);
  });

  // === VOLTAR PARA A PÁGINA INICIAL ===
  $(document).on("click", ".voltar-home", function(e) {
  e.preventDefault();

  // conteúdo inicial do dashboard
  $("#conteudo").html(`
      <h3>Bem-vindo(a), ${nomeUsuario}!</h3>
      <p>Escolha uma das opções no menu para começar.</p>
  `);
  });


  // === SALVAR USUÁRIO (NOVO/EDITAR) ===
  $(document).on("submit", "#formUsuario", function(e) {
    e.preventDefault();
    $.post("salvar-usuario.php", $(this).serialize(), function(resp) {
      alert(resp.msg);
      if (resp.status === "ok") {
        $("#conteudo").load("listar-usuarios.php");
      }
    }, "json");
  });

  // === EXCLUIR USUÁRIO ===
  $(document).on("click", ".btn-excluir", function() {
    if (confirm("Deseja realmente excluir este usuário?")) {
      let id = $(this).data("id");
      $.post("salvar-usuario.php", { acao: "excluir", id: id }, function(resp) {
        alert(resp.msg);
        if (resp.status === "ok") {
          $("#conteudo").load("listar-usuarios.php");
        }
      }, "json");
    }
  });

});