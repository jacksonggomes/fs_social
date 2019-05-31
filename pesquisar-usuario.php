<?php
session_start();
  if(!isset($_SESSION['usu_id']) || $_SESSION['usu_perfil'] != 'Administrador')
  {
    header("location: index.php");
    exit;
  }
// Header
include_once 'includes/header.php';
?>
<div class="column middle">
  <div class="container">
    <form action="pesquisar-usuario-result.php" method="GET">
      <fieldset id="paciente">
        <legend>Pesquisar Usuário</legend>
                <div class="row">
          <div class="col-25"><label for="fia">Nome</label></div>
          <div class="col-75"><input type="text" id="nome" name="nnome" placeholder="Informe o nome do usuário.."></div>
        </div>
      </fieldset>
      <div class="row">
        <input type="submit" name="btn-pesquisar-usu" value="Pesquisar">
      </div>       
    </form>
    <br>
    <form action="crud-paciente.php">
      <div class="row">
        <input id="adicionar" type="submit" value="Adicionar">
      </div>
    </form>
    <br>
  </div>
  </div>
</div>
<?php
// Footer
include_once 'includes/footer.php';
?>
