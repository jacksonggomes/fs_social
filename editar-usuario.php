<?php
session_start();
  if(!isset($_SESSION['usu_id']) || $_SESSION['usu_perfil'] != 'Administrador')
  {
    header("location: index.php");
    exit;
  }
  
// Header
include_once 'includes/header.php';
include_once 'includes/scripts.php';
include_once 'includes/functions.php';

if(isset($_GET['usu_id'])):
  $resultado = pesquisarUsuarioId($_GET['usu_id']);
endif;
?>

<div class="column middle">
  <div class="container">
    <form id="formulario" action="php_action/update-usuario.php" method="POST">
      <fieldset id="internacao">
        <?php foreach ($resultado as $dados): ?>
          <legend>Dados do usuário</legend>
          <div class="row">
            <div class="col-75"><input type="hidden" id="id" name="nid" value="<?php echo $dados['usu_id'];?>"></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="nome">Nome</label></div>
            <div class="col-75"><input type="text" id="nome" name="nnome" value="<?php echo $dados['usu_nome'];?>" readonly></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="cargo">Cargo</label></div>
            <div class="col-75"><input type="text" id="cargo" name="ncargo" value="<?php echo $dados['usu_cargo'];?>" readonly></div>
          </div>

        <div class="row">
          <div class="col-25"><label for="perfil">Perfil</label></div>
          <div class="col-75">
            <select id="perfil" name="nperfil" required>
              <option value="<?php echo $dados['usu_perfil'];?>" selected><?php echo $dados['usu_perfil'];?></option>
              <option value="Usuário">Usuário</option>
              <option value="Administrador">Administrador</option>
            </select>
          </div>
        </div>


      <div class="row">
          <div class="col-25"><label for="status">Status</label></div>
          <div class="col-75">
            <select id="status" name="nstatus" required>
              <option value="<?php echo $dados['usu_status'];?>" selected><?php echo $dados['usu_status'];?></option>
              <option value="Ativado">Ativado</option>
              <option value="Desativado">Desativado</option>
            </select>
          </div>
        </div>
  </fieldset>
  <?php endforeach; ?>
  <div class="row">
    <input type="submit" name="btn-atualizar-usuario" value="Salvar">
  </div>        
</form>

</div>
</div>    
</div>

<?php
// Footer
include_once 'includes/footer.php';
?>
