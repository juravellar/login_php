$(function() {

  // === LOGIN VIA AJAX ===
  $(document).on("submit", "#formLogin", function(e) {
    e.preventDefault();
    $.post("login.php", $(this).serialize(), function(retorno) {
      if (retorno.status === "ok") {
        window.location.href = "dashboard.php";
      } else {
        $("#msgLogin").html(`<div class='alert alert-danger'>${retorno.msg}</div>`);
      }
    }, "json");
  });

  // === CARREGAR FORMULÁRIOS/PÁGINAS VIA AJAX ===
  $(document).on("click", ".load-page", function(e) {
    e.preventDefault();
    let page = $(this).data("page");

    // Se estivermos no login, carregamos dentro do card
    if ($("#conteudo-login").length) {
      $("#conteudo-login").load(page);
    } 
    // Se estivermos no dashboard, carregamos na div principal
    else if ($("#conteudo").length) {
      $("#conteudo").load(page);
    }
  });

  // === VOLTAR PARA O DASHBOARD ===
  $(document).on("click", ".voltar-home", function(e) {
    e.preventDefault();
    $("#conteudo").html(`
      <h3>Bem-vindo(a), ${nomeUsuario}!</h3>
      <p>Escolha uma das opções no menu para começar.</p>
    `);
  });

  // === SALVAR USUÁRIO (NOVO OU EDITAR) VIA AJAX ===
  $(document).on("submit", "#formUsuario", function(e) {
    e.preventDefault();
    $.post("salvar-usuario.php", $(this).serialize(), function(resp) {
      alert(resp.msg);
      if(resp.status === "ok") {
        // Se estivermos no dashboard
        if ($("#conteudo").length) {
          $("#conteudo").load("listar-usuarios.php");
        }
        // Se estivermos no login, voltamos para o login após cadastro
        else if ($("#conteudo-login").length) {
          $("#conteudo-login").load("index.php #conteudo-login > *");
        }
      }
    }, "json");
  });

  // === EXCLUIR USUÁRIO VIA AJAX ===
  $(document).on("click", ".btn-excluir", function() {
    if (confirm("Deseja realmente excluir este usuário?")) {
      let id = $(this).data("id");
      $.post("salvar-usuario.php", { acao: "excluir", id: id }, function(resp) {
        alert(resp.msg);
        if(resp.status === "ok") {
          $("#conteudo").load("listar-usuarios.php");
        }
      }, "json");
    }
  });

});