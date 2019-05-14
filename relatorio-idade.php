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
    <form action="relatorio-idade-result.php" method="GET">
      <fieldset id="relatorio">
        <legend>Relatórios</legend>          
        <div class="row">
          <div class="col-25"><label for="idadeinicial">Idade Inicial</label></div>
          <div class="col-75"><input type="text" id="idadeinicial" name="nidadeinicial" required></div>
        </div>
        <div class="row">
          <div class="col-25"><label for="idadefinal">Idade Final</label></div>
          <div class="col-75"><input type="text" id="idadefinal" name="nidadefinal" required></div>
        </div>
        <div class="row">
          <div class="col-25"><label for="datainicial">Data inicial</label></div>
          <div class="col-75"><input type="date" id="datainicial" name="ndatainicial" required></div>
        </div>
        <div class="row">
          <div class="col-25"><label for="datafinal">Data final</label></div>
          <div class="col-75"><input type="date" id="datafinal" name="ndatafinal" required></div>
        </div>
      </fieldset>
      <div class="row">
        <input type="submit" name="btn-pesquisar-relatorio" value="Pesquisar">
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
