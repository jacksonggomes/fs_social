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
<div id="logo-cad">
	<img src="images/sapagrupado.png">
</div>
<div id="corpo-form-cad">
<h1>Cadastrar Usuário</h1>
<form method="POST">
	<input type="text" name="nome" placeholder="Nome completo" required>
	<input type="text" name="cargo" placeholder="Cargo" required>
	<select id="perfil" name="perfil" hidden>
            <option selected value="Usuário">Usuário</option>
    </select>
	<input type="text" name="login" placeholder="Usuário" required>
	<input type="password" name="senha" placeholder="Senha" required>
	<input type="password" name="confSenha" placeholder="Confirmar senha" required>
	<input type="submit" value="Cadastrar" name="cadastrar">
</form>
<form action="index.php">
    <div class="row">
        <input id="voltar" type="submit" value="Voltar">
    </div>
 </form>
</div>
<?php
//verificar se clicou no botão
if(isset($_POST['nome'])){
	$nome = addslashes($_POST['nome']);
	$cargo = addslashes($_POST['cargo']);
	$perfil = addslashes($_POST['perfil']);
	$login = addslashes($_POST['login']);
	$senha = addslashes($_POST['senha']);
	$confirmarSenha = addslashes($_POST['confSenha']);
	//verificar se esta preenchido
	if(!empty($nome) && !empty($cargo) && !empty($perfil) && !empty($login) && !empty($senha) && !empty($confirmarSenha))
	{
		$u->conectar("fsocial","localhost","root","");
		if($u->msgErro == "")//tudo ok
		{
			if($senha == $confirmarSenha){
				if($u->cadastrar($nome,$cargo,$perfil,$login,$senha)){

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