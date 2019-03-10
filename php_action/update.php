<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';

if(isset($_POST['btn-editar-paciente'])):
	$id = mysqli_escape_string($connect, $_POST['nid']);
	$fia = mysqli_escape_string($connect, $_POST['nfia']);
	$cadsus = mysqli_escape_string($connect, $_POST['ncadsus']);
	$cpf = mysqli_escape_string($connect, $_POST['ncpf']);
	$nome = mysqli_escape_string($connect, $_POST['nnome']);
	$endereco = mysqli_escape_string($connect, $_POST['nendereco']);
	$bairro = mysqli_escape_string($connect, $_POST['nbairro']);
	$cidade = mysqli_escape_string($connect, $_POST['ncidade']);
	$estado = mysqli_escape_string($connect, $_POST['nestado']);
	$telefone = mysqli_escape_string($connect, $_POST['ntelefone']);
	$pai = mysqli_escape_string($connect, $_POST['npai']);
	$ppai = mysqli_escape_string($connect, $_POST['nppai']);
	$mae = mysqli_escape_string($connect, $_POST['nmae']);
	$pmae = mysqli_escape_string($connect, $_POST['npmae']);
	$conjugue = mysqli_escape_string($connect, $_POST['nconjugue']);
	$pconjugue = mysqli_escape_string($connect, $_POST['npconjugue']);
	$responsavel = mysqli_escape_string($connect, $_POST['nresponsavel']);
	$vinculo = mysqli_escape_string($connect, $_POST['nvinculoresponsavel']);
	$naturalidade = mysqli_escape_string($connect, $_POST['nnaturalidade']);
	$procedencia = mysqli_escape_string($connect, $_POST['nprocedencia']);
	$datanascimento = mysqli_escape_string($connect, $_POST['ndatanascimento']);
	$idade = mysqli_escape_string($connect, $_POST['nidade']);
	$sexo = mysqli_escape_string($connect, $_POST['nsexo']);
	$agregacao = mysqli_escape_string($connect, $_POST['nagregacao']);
	$escolaridade = mysqli_escape_string($connect, $_POST['nescolaridade']);
	$pessoas = mysqli_escape_string($connect, $_POST['npessoas']);
	$pessoasrend = mysqli_escape_string($connect, $_POST['npessoasrend']);
	$casa = mysqli_escape_string($connect, $_POST['ncasa']);
	$construcaocasa = mysqli_escape_string($connect, $_POST['nconstrucaocasa']);
	$esgoto = mysqli_escape_string($connect, $_POST['nesgoto']);
	$agua = mysqli_escape_string($connect, $_POST['nagua']);
	$luz = mysqli_escape_string($connect, $_POST['nluz']);
	$ocupacao = mysqli_escape_string($connect, $_POST['nocupacao']);
	$localtrabalho = mysqli_escape_string($connect, $_POST['nlocaltrabalho']);
	$relacaotrabalhista = mysqli_escape_string($connect, $_POST['nrelacaotrabalhista']);
	$vinculoprevidenciario = mysqli_escape_string($connect, $_POST['nvinculoprevidenciario']);
	$orgaovinculacao = mysqli_escape_string($connect, $_POST['norgaovinculacao']);
	
	$sql = "UPDATE paciente SET (pac_orgao_vinc = '$orgaovinculacao') WHERE pac_id = '$id'";

	$sql = "UPDATE paciente SET (pac_fia='$fia', pac_cadsus='$cadsus', pac_cpf='$cpf', pac_nome='$nome', pac_endereco='$endereco', pac_bairro_id='$bairro', pac_cidade_id='$cidade', pac_estado='$estado', pac_telefone='$telefone', pac_nome_pai='$pai', pac_prof_pai='$ppai', pac_nome_mae='$mae', pac_prof_mae='$pmae', pac_conjugue='$conjugue', pac_prof_conjugue='$pconjugue', pac_responsavel='$responsavel', pac_responsavel_vinc='$vinculo', pac_naturalidade='$naturalidade', pac_procedencia='$procedencia', pac_nascimento='$datanascimento', pac_idade='$idade', pac_sexo='$sexo', pac_agregacao='$agregacao', pac_escolaridade='$escolaridade', pac_pessoas_res='$pessoas', pac_pessoas_rend='$pessoasrend', pac_tipo_casa='$casa', pac_const_casa='$construcaocasa', pac_esgoto='$esgoto', pac_agua='$agua', pac_luz='$luz', pac_ocupa='$ocupacao', pac_local_trabalho='$localtrabalho', pac_relacao_trabalhista='$relacaotrabalhista', pac_vinculo_prev='$vinculoprevidenciario', pac_orgao_vinc='$orgaovinculacao')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Atualizado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao atualizar";
		header('Location: ../index.php');
	endif;
endif;