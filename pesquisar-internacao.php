<?php
// Header
include_once 'includes/header.php';
?>

<div class="column middle">
  <div class="container">
    <form action="/action_page.php">
      <fieldset id="paciente">
        <legend>Pesquisar Inrternações</legend>
        <div class="row">
          <div class="col-25"><label for="fia">CADSUS</label></div>
          <div class="col-75"><input type="text" id="cadsus" name="ncadsus" placeholder="Informe o cartão do SUS.."></div>
        </div>
        <div class="row">
          <div class="col-25"><label for="fia">Nome</label></div>
          <div class="col-75"><input type="text" id="nome" name="nnome" placeholder="Informe o nome do paciente.."></div>
        </div>
      </fieldset>
      <div class="row">
        <input type="submit" value="Pesquisar">
      </div>  
    </form>
    <br>
    <form action="crud-internacao.php">
      <div class="row">
        <input id="adicionar" type="submit" value="Adicionar">
      </div>
    </form>
  </div>
</div>    
</div>

<!--script-->
<script>
  $("#telefone").mask("(00) 0000-0000");
  $("#celular").mask("(00) 00000-0000");
</script>

<?php
// Footer
include_once 'includes/footer.php';
?>
