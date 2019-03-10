<?php
include_once 'includes/functions.php';
// Header
include_once 'includes/header.php';
include_once 'includes/scripts.php';
?>

<div class="column middle">
  <div class="container">
    <form id="formulario" action="php_action/create1.php" method="POST">
      <fieldset id="internacao">
        <legend>1. Dados da Internação</legend>
        <div class="row">
          <div class="col-25"><label for="datainternacao">Data de Internação</label></div>
          <div class="col-75"><input type="date" id="datainternacao" name="ndatainternacao"></div>
        </div>
        <div class="row">
          <div class="col-25"><label for="cpf">CADSUS</label></div>
          <div class="col-75"><input type="text" id="cadsus" name="ncadsus" placeholder="Informe o cartão CADSUS.."></div>
        </div>

        <div class="row">
          <div class="col-25"><label for="nomepaciente">Nome</label></div>
          <div class="col-75"><input type="text" id="nomepaciente" name="nnomepaciente" placeholder="..." readonly></div>
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
          <div class="row"><div class="col-25"><label for="diagnostico">Diagnóstico</label></div>
          <div class="col-75"><input type="text" id="diagnostico" name="ndiagnostico" placeholder="Informe o diagnóstico.."></div>
        </div>
    </fieldset>
    <div class="row">
      <input type="submit" name="btn-cadastrar-internacao" value="Enviar">
    </div>        
  </form>
</div>
</div>
</div>
<!--Script-->
<script type="text/javascript"></script>

<?php
// Footer
include_once 'includes/footer.php';
?>
