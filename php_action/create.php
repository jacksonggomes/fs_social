<?php
// Sessão
session_start();
// Conexão
require_once 'db_connect.php';
// Clear
function clear($input) {
	global $connect;
	// sql
	$var = mysqli_escape_string($connect, $input);
	// xss
	$var = htmlspecialchars($var);
	return $var;
}

//cadastrar usuario
if(isset($_POST['btn-cadastrar-paciente'])):
	$fia = clear($_POST['nfia']);
	$cadsus = clear($_POST['ncadsus']);
	$cpf = clear($_POST['ncpf']);
	$nome = clear($_POST['nnome']);
	$endereco = clear($_POST['nendereco']);
	$bairro = clear($_POST['nbairro']);
	$cidade = clear($_POST['ncidade']);
	$estado = clear($_POST['nestado']);
	$telefone = clear($_POST['ntelefone']);
	$pai = clear($_POST['npai']);
	$ppai = clear($_POST['nppai']);
	$mae = clear($_POST['nmae']);
	$pmae = clear($_POST['npmae']);
	$conjugue = clear($_POST['nconjugue']);
	$pconjugue = clear($_POST['npconjugue']);
	$responsavel = clear($_POST['nresponsavel']);
	$vinculo = clear($_POST['nvinculoresponsavel']);
	$naturalidade = clear($_POST['nnaturalidade']);
	$procedencia = clear($_POST['nprocedencia']);
	$datanascimento = clear($_POST['ndatanascimento']);
	$idade = clear($_POST['nidade']);
	$sexo = clear($_POST['nsexo']);
	$agregacao = clear($_POST['nagregacao']);
	$escolaridade = clear($_POST['nescolaridade']);
	$pessoas = clear($_POST['npessoas']);
	$pessoasrend = clear($_POST['npessoasrend']);
	$casa = clear($_POST['ncasa']);
	$construcaocasa = clear($_POST['nconstrucaocasa']);
	$esgoto = clear($_POST['nesgoto']);
	$agua = clear($_POST['nagua']);
	$luz = clear($_POST['nluz']);
	$ocupacao = clear($_POST['nocupacao']);
	$localtrabalho = clear($_POST['nlocaltrabalho']);
	$relacaotrabalhista = clear($_POST['nrelacaotrabalhista']);
	$vinculoprevidenciario = clear($_POST['nvinculoprevidenciario']);
	$orgaovinculacao = clear($_POST['norgaovinculacao']);

	$sql = "INSERT INTO paciente (pac_fia, pac_cadsus, pac_cpf, pac_nome, pac_endereco, pac_bairro_id, pac_cidade_id, pac_estado, pac_telefone, pac_nome_pai, pac_prof_pai, pac_nome_mae, pac_prof_mae, pac_conjugue, pac_prof_conjugue, pac_responsavel, pac_responsavel_vinc, pac_naturalidade, pac_procedencia, pac_nascimento, pac_idade, pac_sexo, pac_agregacao, pac_escolaridade, pac_pessoas_res, pac_pessoas_rend, pac_tipo_casa, pac_const_casa, pac_esgoto, pac_agua, pac_luz, pac_ocupa, pac_local_trabalho, pac_relacao_trabalhista, pac_vinculo_prev, pac_orgao_vinc) VALUES ('$fia', '$cadsus', '$cpf','$nome', '$endereco', '$bairro', '$cidade', '$estado', '$telefone', '$pai', '$ppai', '$mae', '$pmae', '$conjugue', '$pconjugue', '$responsavel','$vinculo', '$naturalidade', '$procedencia', '$datanascimento', '$idade', '$sexo', '$agregacao', '$escolaridade', '$pessoas', '$pessoasrend', '$casa', '$construcaocasa', '$esgoto', '$agua', '$luz', '$ocupacao', '$localtrabalho', '$relacaotrabalhista', '$vinculoprevidenciario', '$orgaovinculacao')";

	if(mysqli_query($connect, $sql)):
		$_SESSION['mensagem'] = "Cadastrado com sucesso!";
		header('Location: ../index.php');
	else:
		$_SESSION['mensagem'] = "Erro ao cadastrar";
		header('Location: ../index.php');
	endif;
endif;