<?php
session_start();
  if(!isset($_SESSION['usu_id']))
  {
    header("location: index.php");
    exit;
  }
// Header
include_once 'includes/header.php';
include_once 'includes/scripts.php';
include_once 'includes/functions.php';
?>

<div class="column middle">
  <div class="container">
  <?php
  if(isset($_GET['pac_id'])):
    $resultado_paciente = pesquisarPacienteId($_GET['pac_id']);
  endif;
  foreach ($resultado_paciente as $dados):
  ?>
    <form id="formulario" action="php_action/create-internacao.php" method="POST">
      <fieldset id="internacao">
        <legend>Dados da Internação</legend>
        <div class="row">
          <div class="col-25"><label for="datainternacao">Data de Internação</label></div>
          <div class="col-75"><input type="date" id="datainternacao" name="ndatainternacao"></div>
        </div>

        <div class="row">
          <div class="col-75"><input type="hidden" id="pac_id" name="npac_id" value="<?php echo $dados['pac_id'];?>"></div>
        </div>

        <div class="row">
          <div class="col-25"><label for="nomepaciente">Nome</label></div>
          <div class="col-75"><input type="text" id="nomepaciente" name="nnomepaciente" value="<?php echo $dados['pac_nome'];?>" readonly></div>
        </div>

        <div class="row">
          <div class="col-25"><label for="admissao">Admissão</label></div>
          <div class="col-75"><input type="text" id="admissao" name="nadmissao" placeholder="Informe de que unidade o paciente"></div>
        </div>

        <div class="row">
          <div class="col-25"><label for="clinica">Clínica</label></div>
          <div class="col-75"><input type="text" id="clinica" name="nclinica" placeholder="Informe o nome.."></div>
        </div>

        <div class="row">
          <div class="col-25"><label for="clinica">Leito</label></div>
          <div class="col-75"><input type="number" id="leito" name="nleito" placeholder="Número do leito.."></div>
        </div>

        <div class="row">
          <div class="row"><div class="col-25"><label for="diagnostico">Diagnóstico</label></div>
          <div class="col-75"><input type="text" id="diagnostico" name="ndiagnostico" placeholder="Informe o diagnóstico.."></div>
        </div>

         <div class="row">
        <div class="col-25"><label for="status">Status</label></div>
        <div class="col-75">
          <select id="status" name="nstatus">
            <option selected>--Selecione um status--</option>
            <option value="Internado">1) Internado</option>
            <option value="Alta">2) Alta</option>
            <option value="Transferido">3) Transferido</option>
            <option value="Óbito">4) Óbito</option>
          </select>
        </div>
      </div>

    </fieldset>
    <div class="row">
      <input type="submit" name="btn-cadastrar-internacao" value="Enviar">
    </div>        
  </form>  
  <?php endforeach; ?>
</div>
</div>
</div>
<!--Script-->
<script type="text/javascript"></script>
<?php
// Footer
include_once 'includes/footer.php';
?>
