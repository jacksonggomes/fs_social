<?php
session_start();
  if(!isset($_SESSION['usu_id']))
  {
    header("location: index.php");
    exit;
  }
// Conexão
include_once 'includes/functions.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['btn-pesquisar-usu'])):$resultado_usuario = pesquisarUsuario($_GET['nnome']);
  ?>
  <div class="column middle">
    <div class="container">
      <div class="row">
        <div>
          <h3> Internações </h3>
          <?php
            if($resultado_usuario->rowCount() > 0):
              foreach ($resultado_usuario as $dados):
              ?>
              <table>
              <thead>
              <tr>
                <th>Nome:</th>
                <th>Cargo:</th>
                <th>Perfil:</th>
                <th>Status:</th>
              </tr>
              </thead>

              <tbody>
                <tr>
                    <td><?php echo $dados['usu_nome']; ?></td>
                    <td><?php echo $dados['usu_cargo']; ?></td>
                    <td><?php echo $dados['usu_perfil']; ?></td>
                    <td><?php echo $dados['usu_status']; ?></td>
                    <td><a href="editar-usuario.php?usu_id=<?php echo $dados['usu_id']; ?>" title="Editar Usuário"><img src="images/edit.png" height="40" width="40"></a></td>
                  </tr>
                  <?php 
              endforeach;
              ?>
              </tbody>
            </table>
            <?php else: ?>
                <div class="msg-erro" align="center">
                 Internação não encontrada!
                </div>
            <?php endif;?>
            <br>
            <form action="pesquisar-usuario.php">
              <div class="row">
                <input type="submit" value="Voltar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
    <?php 
  endif;
  // Footer
  include_once 'includes/footer.php';
  ?>
