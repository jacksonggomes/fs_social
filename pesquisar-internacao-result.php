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
  $resultado_internacao = pesquisarInternacao($_GET['ncadsus'],$_GET['nnome']);
  ?>
  <div class="column middle">
    <div class="container">
      <div class="row">
        <div>
          <h3> Internações </h3>
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
              <?php
              if(count ($resultado_internacao)):
                foreach ($resultado_internacao as $dados):
                  ?>
                  <tr>
                    <td><?php echo $dados['interna_data']; ?></td>
                    <td><?php echo $dados['interna_admissao']; ?></td>
                    <td><?php echo $dados['interna_clinica']; ?></td>
                    <td><?php echo $dados['interna_status']; ?></td>
                    <td><a href="editar-internacao.php?interna_id=<?php echo $dados['interna_id']; ?>" title="Editar Internação"><img src="images/edit.png" height="40" width="40"></a></td>
                  </tr>
                  <?php 
                endforeach;
                else: ?>

                  <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                  </tr>

                  <?php 
                endif;
                ?>
              </tbody>
            </table>
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
