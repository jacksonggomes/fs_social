<?php
session_start();
  if(!isset($_SESSION['usu_id']))
  {
    header("location: index.php");
    exit;
  }
// Header
include_once 'includes/header.php';
?>
<div class="column middle">
  <div class="container">
    <form action="pesquisar-paciente-result.php" method="GET">
      <fieldset id="paciente">
        <legend>Pesquisar Paciente</legend>
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
        <input type="submit" name="btn-pesquisar-pac" value="Pesquisar">
      </div>       
    </form>
    <br>
    <form action="crud-paciente.php">
      <div class="row">
        <input id="adicionar" type="submit" value="Adicionar">
      </div>
    </form>
  </div>
</div>
<?php
// Footer
include_once 'includes/footer.php';
?>
