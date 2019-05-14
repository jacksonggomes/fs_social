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
  ?>
  <div class="column middle">
    <div class="container">              
            <div class="msg-sucesso" align="center">
              <?php echo($_SESSION['usu_msg']);?>
            </div>            
            <br>
            <form action="pesquisar-internacao.php">
              <div class="row">
                <input type="submit" value="Voltar">
              </div>
            </form>
    </div>
  </div>
  </div>
  <?php 
  // Footer
  include_once 'includes/footer.php';
  ?>
