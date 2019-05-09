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
if(isset($_GET['btn-pesquisar-interna'])):
  
  $resultado_internacao_boolean = pesquisarInternacaoBoolean($_GET['ncadsus'],$_GET['nnome']);
  ?>
  <div class="column middle">
    <div class="container">
      <div class="row">
        <div>
          <h3> Internações </h3>
          <?php
            if($resultado_internacao_boolean):
              $resultado_internacao = pesquisarInternacao($_GET['ncadsus'],$_GET['nnome']);
              foreach ($resultado_internacao as $dados):
              ?>
              <table>
              <thead>
              <tr>
                <th>Data de Internação:</th>
                <th>Admissão:</th>
                <th>Clínica:</th>
                <th>Status:</th>
              </tr>
              </thead>

              <tbody>
                <tr>
                    <td><?php echo $dados['interna_data']; ?></td>
                    <td><?php echo $dados['interna_admissao']; ?></td>
                    <td><?php echo $dados['interna_clinica']; ?></td>
                    <td><?php echo $dados['interna_status']; ?></td>
                    <td><a href="editar-internacao.php?interna_id=<?php echo $dados['interna_id']; ?>" title="Editar Internação"><img src="images/edit.png" height="40" width="40"></a></td>
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
            <form action="pesquisar-internacao.php">
              <div class="row">
                <input type="submit" value="Voltar">
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <?php 
  endif;
  // Footer
  include_once 'includes/footer.php';
  ?>
