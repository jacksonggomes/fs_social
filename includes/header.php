<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Página inicial</title>
  <link rel="icon" type="shortcut icon" href="images/sap.ico" />
  <link rel="stylesheet" href="css/estilo.css"/>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>

  <div class="header">
    <img src="images/sapagrupado.png">
  </div>

  <div class="topnav">
    <a href="https://10.54.200.10/aghu/pages/casca/casca.xhtml" target="blank">AGHU</a>
    <a href="#">CADSUS</a>
    <a href="#">SISREG</a>
    <a href="Sair.php">SAIR</a>
  </div>
  <?php
  if ($_SESSION['usu_perfil'] == 'Administrador'): ?>
  <div class="row">
    <div class="column side">
      <ul class="menu">
        <li><a href="home.php">Dashboard</a></li>
        <li><a href="pesquisar-usuario.php">Gerenciar usuários</a></li>
        <li><a href="pesquisar-paciente.php">Pacientes</a></li>
        <li><a href="pesquisar-internacao.php">Internações</a></li>
        <li><a href="#">Relatórios de Internações</a>
            <ul>
              <li><a href="relatorio-sexo.php">Sexo</a></li>
              <li><a href="relatorio-origem.php">Origem</a></li>
              <li><a href="relatorio-idade">Idade</a></li> 
              <li><a href="relatorio-renda">Renda</a></li>                  
            </ul>
        </li>
      </ul>
    </div>
  <?php else: ?>
  <div class="row">
    <div class="column side">
      <ul class="menu">
        <li><a href="home.php">Home</a></li>
        <li><a href="pesquisar-paciente.php">Pacientes</a></li>
        <li><a href="pesquisar-internacao.php">Internações</a></li>
        <li><a href="#">Relatórios de Internações</a>
            <ul>
              <li><a href="relatorio-sexo.php">Sexo</a></li>
              <li><a href="relatorio-origem.php">Origem</a></li>
              <li><a href="relatorio-idade">Idade</a></li> 
              <li><a href="relatorio-renda">Renda</a></li>                  
            </ul>
        </li>
      </ul>
    </div>
  <?php endif;?>
