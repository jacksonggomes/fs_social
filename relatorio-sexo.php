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
    <form action="relatorio-sexo-result.php" method="GET">
      <fieldset id="relatorio">
        <legend>Relatórios</legend>          
        <fieldset id="sexo" required><legend>Sexo:</legend>
          <input type="radio" value="Masculino" name="nsexo" id="cMasc"><label for="cMasc">Masculino</label>
          <input type="radio" value="Feminino" name="nsexo" id="cFem"><label for="cFem">Feminino</label>     
        </fieldset>
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
