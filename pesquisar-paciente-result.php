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
if(isset($_GET['btn-pesquisar-pac'])):
  $resultado_paciente = pesquisarPaciente($_GET['nprontuario'], $_GET['nnome']);
?>
  <div class="column middle">
    <div class="container">
      <div class="row">
        <div>
          <h3> Pacientes </h3>                      
          <?php
          if($resultado_paciente->rowCount() > 0):
            foreach ($resultado_paciente as $dados):
          ?>
          <table>
            <thead>
              <tr>
                <th>Prontuário:</th>
                <th>Nome:</th>
                <th>Telefone:</th>
                <th>Idade:</th>
              </tr>
            </thead>

            <tbody>
                  <tr>
                    <td><?php echo $dados['pac_prontuario']; ?></td>
                    <td><?php echo $dados['pac_nome']; ?></td>
                    <td><?php echo $dados['pac_telefone']; ?></td>
                    <td><?php echo $dados['pac_idade']; ?></td>
                    <td><a href="editar-paciente.php?pac_id=<?php echo $dados['pac_id']; ?>" title="Editar paciente"><img src="images/edit.png" height="40" width="40"></a></td>
                    <td><a href="crud-internacao.php?pac_id=<?php echo $dados['pac_id']; ?>" title="Internar paciente"><img src="images/internar1.png" height="50" width="50"></a></td>
                  </tr>
            <?php 
              endforeach;
              ?>
              </tbody>
            </table>
            <?php else: ?>
                <div class="msg-erro" align="center">
                 Paciente não encontrada!
                </div>
            <?php endif;?>
            <br>
            <form action="pesquisar-paciente.php">
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
