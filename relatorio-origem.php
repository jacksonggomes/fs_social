<?php
session_start();
  if(!isset($_SESSION['usu_id']))
  {
    header("location: index.php");
    exit;
  }
// Header
include_once 'includes/header.php';
include_once 'includes/functions.php';
?>

<div class="column middle">
  <div class="container">
    <form action="relatorio-origem-result.php" method="GET">
      <fieldset id="relatorio">
        <legend>Relatórios</legend>          
        <div class="row">
          <div class="col-25"><label for="origem">Cidade de procedência</label></div>
          <div class="col-75">
            <select id="origem" name="norigem">
              <option value="" selected>--Selecione a cidade onde o paciente mora--</option>
              <?php $resultado_cidade = listarCidade();
              if(count($resultado_cidade)):
                foreach ($resultado_cidade as $cidade):?>
                  <option value="<?php echo $cidade['id_cidade'] ?>"><?php echo $cidade['cid_desc'] ?></option>
                  <?php 
                endforeach;
              endif; ?>
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
