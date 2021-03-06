<!DOCTYPE html>
<?php
require_once 'classes/usuario.php';
$u = new Usuario;
?>
<html lang="pt-br">
<head>
  <title>Página de Login SAP</title>
  <link rel="icon" type="shortcut icon" href="images/sap.ico" />
  <link rel="stylesheet" href="css/estilo-login.css"/>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div id="logo">
	<img src="images/sapagrupado.png">
</div>
<div id="corpo-form">
	<h1>Entrar</h1>
<form method="POST">
	<input type="text" name="login" placeholder="Usuário">
	<input type="password" name="senha" placeholder="Senha">
	<input type="submit" value="Acessar" name="acessar">
	<a href="cadastrar-usuario.php">Ainda não é inscrito?<strong>Cadastre-se!</strong></a>	
</form>
</div>
<?php
//verificar se clicou no botão
if(isset($_POST['login'])){
	$login = addslashes($_POST['login']);
	$senha = addslashes($_POST['senha']);
	//verificar se esta preenchido
	if(!empty($login) && !empty($senha))
	{
		$u->conectar("fsocial","localhost","root","");
		if($u->msgErro == "")
		{
			if($u->logar($login, $senha))
			{
				header("location: bemvindo.php");
			}else{
				?>
					<div class="msg-erro">
						Email e/ou senha incorretos!
					</div>
				<?php				
			}
		}else{
			?>
				<div class="msg-erro">
					<?php echo "Erro: ".$u->msgErro;?>
				</div>
			<?php	
		}
	}else{
		?>
			<div class="msg-erro">
				Preencha todos os campos!
			</div>
		<?php
	}
}
?>
</body>
</html>