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

if(isset($_GET['interna_id'])):
  $resultado = pesquisarInternacaoId($_GET['interna_id']);
endif;
?>

<div class="column middle">
  <div class="container">
    <form id="formulario" action="php_action/update-internacao.php" method="POST">
      <fieldset id="internacao">
        <?php foreach ($resultado as $dados): ?>
          <legend>Dados da Internação</legend>
          <div class="row">
            <div class="col-75"><input type="hidden" id="id" name="nid" value="<?php echo $dados['interna_id'];?>"></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="datanascimento">Data de Internação</label></div>
            <div class="col-75"><input type="date" id="datainternacao" name="ndatainternacao" value="<?php echo $dados['interna_data'];?>"></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="fia">Admissão</label></div>
            <div class="col-75"><input type="text" id="admissao" name="nadmissao" value="<?php echo $dados['interna_admissao'];?>"></div>
          </div>
          <div class="row">
            <div class="col-25"><label for="cpf">Clínica</label></div>
            <div class="col-75"><input type="text" id="clinica" name="nclinica" value="<?php echo $dados['interna_clinica'];?>"></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="cpf">Leito</label></div>
            <div class="col-75"><input type="text" id="leito" name="nleito" value="<?php echo $dados['interna_leito'];?>"></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="nome">Diagnóstico</label></div>
            <div class="col-75"><input type="text" id="diagnostico" name="ndiagnostico" value="<?php echo $dados['interna_diagnostico'];?>"></div>
          </div>

          <div class="row">
            <div class="col-75"><input type="hidden" id="pac_id" name="npac_id" value="<?php echo $dados['interna_pac_id'];?>"></div>
          </div>          

    <div class="row">
      <div class="col-25"><label for="vresponsavel">Status</label></div>
      <div class="col-75">
        <select id="status" name="nstatus">
          <option selected><?php echo $dados['interna_status'];?></option>
          <option value="Internado">1) Internado</option>
          <option value="Alta">2) Alta</option>
          <option value="Transferido">3) Transferido</option>
          <option value="Óbito">4) Óbito</option>
        </select>
      </div>
    </div>

  </fieldset>
  <?php endforeach; ?>
  <div class="row">
    <input type="submit" name="btn-atualizar-internacao" value="Salvar">
  </div>        
</form>
</div>
</div>    
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
