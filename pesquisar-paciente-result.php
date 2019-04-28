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
  $resultado_paciente = pesquisarPaciente($_GET['ncadsus'], $_GET['nnome']);
  ?>
  <div class="column middle">
    <div class="container">
      <div class="row">
        <div>
          <h3> Pacientes </h3>
          <table>
            <thead>
              <tr>
                <th>CADSUS:</th>
                <th>Nome:</th>
                <th>Telefone:</th>
                <th>Idade:</th>
              </tr>
            </thead>

            <tbody>
              <?php
              if(count ($resultado_paciente)):
                foreach ($resultado_paciente as $dados):
                  ?>
                  <tr>
                    <td><?php echo $dados['pac_cadsus']; ?></td>
                    <td><?php echo $dados['pac_nome']; ?></td>
                    <td><?php echo $dados['pac_telefone']; ?></td>
                    <td><?php echo $dados['pac_idade']; ?></td>
                    <td><a href="editar-paciente.php?pac_id=<?php echo $dados['pac_id']; ?>" title="Editar paciente"><img src="images/edit.png" height="40" width="40"></a></td>
                    <td><a href="crud-internacao.php?pac_id=<?php echo $dados['pac_id']; ?>" title="Internar paciente"><img src="images/internar1.png" height="50" width="50"></a></td>
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
            <form action="pesquisar-paciente.php">
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
