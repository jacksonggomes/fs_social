<?php
// Conexão
include_once 'includes/functions.php';
// Header
include_once 'includes/header.php';
// Select
if(isset($_GET['btn-pesquisar-pac'])):
  $resultado_paciente = pesquisarPaciente($_GET['ncadsus']);
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
                    <td><a href="editar-paciente.php?pac_id=<?php echo $dados['pac_id']; ?>"><i class="material-icons">edit</i></a></td>
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
