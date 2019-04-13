<!DOCTYPE html>
<?php
require_once 'usuario.php'
$u = new Usuario;
?>
<html lang="pt-br">
<head>
  <title>Página de Login SAP</title>
  <link rel="stylesheet" href="css/estilo-login.css"/>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<form name="cadastro4">
   CPF:
   <input type="text" name="cpf"
      pattern="\d{3}\.\d{3}\.\d{3}-\d{2}"
      title="Digite o CPF no formato nnn.nnn.nnn-nn"
      oninvalid="return cpf_incorreto(this);">
   <input type="submit">
</form>

<script>
   function cpf_incorreto(el) {
      alert("O valor " + el.value + " não é um CPF");
      return false;
   }
</script>

	<div id="corpo-form">
	<h1>Entrar</h1>
<form method="POST">
	<input type="email" name="email" placeholder="E-mail">
	<input type="password" name="senha" placeholder="Senha">
	<input type="submit" value="Entrar" name="acessar">
	<a href="cadastrar-usuario.php">Ainda não é inscrito?<strong>Cadastre-se!</strong></a>	
</form>
</div>
<?php
//verificar se clicou no botão
if(isset($_POST['nome'])){
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	//verificar se esta preenchido
	if(!empty($email) && !empty($senha)))
	{
		$u->conectar("fsocial","localhost","root","");
		if($u->msgErro == "")
		{
			if($u->logar($email, $senha))
			{
				header("ÁreaPrivada.php")
			}else{
				echo "Email e/ou senha incorretos!";
			}
		}else{
			echo "Erro: ".$u->msgErro;	
		}
	}else{
		echo "Preencha todos os campos!"
	}
}
?>
</body>
</html>