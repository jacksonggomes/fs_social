<?php
// Conexão
include_once 'php_action/init.php';

function listarBairro(){
	$pdo = db_connect(); 
	$resultado_bairro = $pdo->prepare("SELECT * FROM bairro ORDER BY desc_bairro");
	$resultado_bairro->execute();
	return $resultado_bairro;	
	$pdo = null;	
}
function listarCidade(){
	$pdo = db_connect(); 
	$resultado_cidade = $pdo->prepare("SELECT * FROM cidade ORDER BY cid_desc");
	$resultado_cidade->execute();
	return $resultado_cidade;
	$pdo = null;
}

function pesquisarPaciente($pac_cadsus, $pac_nome){
	if ($pac_cadsus != ""){
		$pdo = db_connect(); 
		$resultado_paciente = $pdo->prepare("SELECT pac_id, pac_cadsus, pac_nome, pac_telefone, pac_idade FROM paciente WHERE pac_cadsus = '$pac_cadsus'");
		$resultado_paciente->execute();
	return $resultado_paciente;
	}else{
		$pdo = db_connect(); 
		$resultado_paciente = $pdo->prepare("SELECT pac_id, pac_cadsus, pac_nome, pac_telefone, pac_idade FROM paciente WHERE pac_nome like '%$pac_nome%'");
		$resultado_paciente->execute();
	return $resultado_paciente;
	}
	$pdo = null;
}

function pesquisarPacienteId($pac_id){
	$pdo = db_connect(); 
	$resultado_paciente = $pdo->prepare("SELECT * FROM paciente WHERE pac_id = '$pac_id'");
	$resultado_paciente->execute();
	return $resultado_paciente;
	$pdo = null;
}
function pesquisarPacienteBoolean($cadsus, $nome){
	$pdo = db_connect();
	$result = False;
	if ($cadsus != ""){
		$resultado_paciente = $pdo->prepare("SELECT pac_cadsus FROM paciente WHERE pac_cadsus = '$cadsus'");	
		$resultado_paciente->execute();
		if($resultado_paciente->rowCount() > 0)
		{
			$result = True;
		}
	}elseif($nome != ""){
		$resultado_paciente = $pdo->prepare("SELECT pac_nome FROM paciente WHERE pac_nome like '%$nome%'");	
		$resultado_paciente->execute();
		if($resultado_paciente->rowCount() > 0)
		{
			$result = True;
		}
	}
	return $result;
	$pdo = null;
}

function pesquisarBairroPaciente($pac_bairro_id){
	$pdo = db_connect();
	$resultado_bairro =  $pdo->prepare("SELECT * FROM bairro 
		INNER JOIN paciente
		ON bairro.id_bairro = $pac_bairro_id");
	$resultado_bairro->execute();
	$pdo = null;
	return $resultado_bairro;
}

function pesquisarCidadePaciente($pac_cidade_id){
	$pdo = db_connect();
	$resultado_cidade =  $pdo->prepare("SELECT * FROM cidade 
		INNER JOIN paciente
		ON cidade.id_cidade = $pac_cidade_id");
	$resultado_cidade->execute();
	$pdo = null;
	return $resultado_cidade;
}

function pesquisarInternacao($cadsus, $nome){
	$pdo = db_connect();
	if ($cadsus != ""){
	$resultado_internacao =  $pdo->prepare("SELECT * FROM internacao WHERE interna_pac_id = (SELECT pac_id FROM paciente WHERE pac_cadsus = '$cadsus')");	
	$resultado_internacao->execute();
	return $resultado_internacao;
}else{
	$resultado_internacao =  $pdo->prepare("SELECT * FROM internacao WHERE interna_pac_id = (SELECT pac_id FROM paciente WHERE pac_nome like '%$nome%')");	
	$resultado_internacao->execute();
	return $resultado_internacao;
}
	$pdo = null;
}

function pesquisarInternacaoBoolean($cadsus, $nome){
	$pdo = db_connect();
	if ($cadsus != ""){
		$resultado_internacao =  $pdo->prepare("SELECT interna_id FROM internacao WHERE interna_pac_id = (SELECT pac_id FROM paciente WHERE pac_cadsus = '$cadsus')");	
		$resultado_internacao->execute();
		if($resultado_internacao->rowCount() > 0)
		{
			return True;
		}
	}elseif($nome != ""){
		$resultado_internacao =  $pdo->prepare("SELECT interna_id FROM internacao WHERE interna_pac_id = (SELECT pac_id FROM paciente WHERE pac_nome like '%$nome%')");	
		$resultado_internacao->execute();
		if($resultado_internacao->rowCount() > 0)
		{
			return True;
		}
	}
	return False;
	$pdo = null;
}

function pesquisarInternacaoId($interna_id){
	$pdo = db_connect(); 
	$resultado_internacao = $pdo->prepare("SELECT internacao.*, paciente.pac_nome FROM internacao INNER JOIN paciente ON internacao.interna_pac_id = paciente.pac_id WHERE internacao.interna_id = '$interna_id'");
	//$resultado_internacao = $pdo->prepare("SELECT * FROM internacao WHERE interna_id = '$interna_id'");
	$resultado_internacao->execute();
	$pdo = null;
	return $resultado_internacao;
}

function pesquisaInternado($paciente_id){
	$pdo = db_connect(); 
	$resultado_internado =  $pdo->prepare("SELECT interna_status FROM internacao WHERE interna_pac_id = (SELECT pac_id FROM paciente WHERE pac_id = '$paciente_id')");
	$resultado_internado->execute();
	$pdo = null;
	return $resultado_internado;
}
function buscaMes($mes, $status, $ano){
	$pdo = db_connect(); 
	$resultado_mes=  $pdo->prepare("SELECT 
	COUNT(dem_status)
	FROM demandas
	WHERE MONTH(dem_data) = '$mes' AND dem_status = '$status' AND YEAR(dem_data) = '$ano'");
	$resultado_mes->execute();
	$pdo = null;
	return $resultado_mes;
}
