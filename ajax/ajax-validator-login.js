$(function ($) {
    $("#formulario").on("submit", function () {
      var formulario = $(this);
      var botao = $("#salvar");
      var mensagem = $("#mensagem");
  
      $(this).ajaxSubmit({
        dataType: "json",
        success: function (retorno) {
          if (retorno.sucesso) {
            mensagem.attr('class', 'alert alert-success mt-2')
            formulario.resetForm()
            $(location).attr('href', 'index.php');
          } else {
            mensagem.attr('class', 'alert alert-danger mt-2')
          }
          mensagem.html(retorno.mensagem)
          botao.button('reset')
        }
      });
      return false;
    });
  });
  