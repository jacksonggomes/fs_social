<!DOCTYPE html>
<?php
require_once 'classes/usuario.php';
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
	<div id="corpo-form-cad">
	<h1>Cadastrar</h1>
<form method="POST">
	<input type="text" name="nome" placeholder="Nome completo">
	<input type="text" name="cargo" placeholder="Cargo">
	<select id="perfil" name="perfil">
            <option selected>--Selecione um perfil--</option>
            <option value="Usuário">Usuário</option>
            <option value="Administrador">Administrador</option>
    </select>
	<input type="email" name="email" placeholder="Usuário">
	<input type="password" name="senha" placeholder="Senha">
	<input type="password" name="confSenha" placeholder="Confirmar senha">
	<input type="submit" value="Cadastrar" name="cadastrar">
</form>
</div>
<?php
//verificar se clicou no botão
if(isset($_POST['nome'])){
	$nome = addslashes($_POST['nome']);
	$cargo = addslashes($_POST['cargo']);
	$perfil = addslashes($_POST['perfil']);
	$email = addslashes($_POST['email']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	//verificar se esta preenchido
	if(!empty($nome) && !empty($cargo) && !empty($perfil) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
	{
		$u->conectar("fsocial","localhost","root","");
		if($u->msgErro == "")//tudo ok
		{
			if($senha == $confirmarSenha){
				if($u->cadastrar($nome,$cargo,$perfil,$email,$senha)){

					?>
					<div id="msg-sucesso">
						Cadastrado com sucesso! Acesse para entrar
					</div>
					<?php

				}
				else{
					?>
					<div class="msg-erro">
						Email já cadastrado!
					</div>
					<?php

				}
			}
			else{
				?>
					<div class="msg-erro">
						Senha e confirmação não correspondem!
					</div>
					<?php
			}
		}else
		{
			?>
			<div class="msg-erro">
				<?php echo "Erro: ".$u->msgErro;?>
			</div>
			<?php
			
		}
	}
	else{
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