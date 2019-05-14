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
if(isset($_GET['btn-pesquisar-relatorio'])):
  $resultado1 = pesquisarInternacaoRenda($_GET['nrenda'], $_GET['ndatainicial'], $_GET['ndatafinal'], "Internado");
  $resultado2 = pesquisarInternacaoRenda($_GET['nrenda'], $_GET['ndatainicial'], $_GET['ndatafinal'], "Alta");
  $resultado3 = pesquisarInternacaoRenda($_GET['nrenda'], $_GET['ndatainicial'], $_GET['ndatafinal'], "Transferido");
  $resultado4 = pesquisarInternacaoRenda($_GET['nrenda'], $_GET['ndatainicial'], $_GET['ndatafinal'], "Óbito");
  $totalGeral = pesquisaInternacoes();
  $soma = 0;
  ?>
  <div class="column middle">
    <div class="container">
      <div class="row">
        <div>
          <h3> Internações </h3>
          
              <table>
              <thead>
              <tr>
                <th>Internações:</th>
                <th>Altas:</th>
                <th>Transferências:</th>
                <th>Óbitos:</th>
                <th>Total:</th>
                <th>Total Geral:</th>
              </tr>
              </thead>

              <tbody>
                <tr>
              <?php foreach ($resultado1 as $dados): ?>
                <td><?php echo $dados[0]; $soma += $dados[0]; ?></td>
              <?php endforeach; ?>
              <?php foreach ($resultado2 as $dados): ?>
                <td><?php echo $dados[0]; $soma += $dados[0]; ?></td>
              <?php endforeach; ?>
              <?php foreach ($resultado3 as $dados): ?>
                <td><?php echo $dados[0]; $soma += $dados[0]; ?></td>
              <?php endforeach; ?>
              <?php foreach ($resultado4 as $dados): ?>
                <td><?php echo $dados[0]; $soma += $dados[0]; ?></td>
              <?php endforeach; ?>
              <td><?php echo( $soma); ?>
               <?php foreach ($totalGeral as $dados): ?>
                <td><?php echo $dados[0]; $soma += $dados[0]; ?></td>
              <?php endforeach; ?>
              </tr>                  
              </tbody>
            </table>
            <br>
            <form action="relatorio-renda.php">
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
