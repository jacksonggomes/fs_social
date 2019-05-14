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
    <form action="relatorio-renda-result.php" method="GET">
      <div class="row">
        <div class="col-25"><label for="renda">Renda familiar</label></div>
        <div class="col-75">
          <select id="renda" name="nrenda">
            <option value="" selected>--Selecione uma opção--</option>
            <option value="Até 01 SM">1) Até 01 SM</option>
            <option value="Mais de 01 até 03 SM">2) Mais de 01 até 03 SM</option>
            <option value="Mais de 03 até 05 SM">3) Mais de 03 até 05 SM</option>
            <option value="Mais de 05 até 07 SM">4) Mais de 05 até 07 SM</option>
            <option value="Mais de 07 SM">4) Mais de 07 SM</option>
            <option value="Sem renda">5) Sem renda</option>
          </select>
        </div>
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
