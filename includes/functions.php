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

function pesquisarPacienteId($pac_id){
	$pdo = db_connect(); 
	$resultado_paciente = $pdo->prepare("SELECT * FROM paciente WHERE pac_id = '$pac_id'");
	$resultado_paciente->execute();
	return $resultado_paciente;
	$pdo = null;
}

function pesquisarPaciente($pac_prontuario, $pac_nome){
	if ($pac_prontuario != "" AND $pac_nome == ""){
		$pdo = db_connect(); 
		$resultado_paciente = $pdo->prepare("SELECT pac_id, pac_prontuario, pac_nome, pac_telefone, pac_idade FROM paciente WHERE pac_prontuario = '$pac_prontuario'");
		$resultado_paciente->execute();
	return $resultado_paciente;
	}elseif($pac_prontuario == "" AND $pac_nome != ""){
		$pdo = db_connect(); 
		$resultado_paciente = $pdo->prepare("SELECT pac_id, pac_prontuario, pac_nome, pac_telefone, pac_idade FROM paciente WHERE pac_nome like '%$pac_nome%'");
		$resultado_paciente->execute();
	return $resultado_paciente;
	}else{
		$pdo = db_connect(); 
		$resultado_paciente = $pdo->prepare("SELECT pac_id, pac_prontuario, pac_nome, pac_telefone, pac_idade FROM paciente ORDER BY pac_nome");
		$resultado_paciente->execute();
	return $resultado_paciente;
	}
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

function pesquisarInternacao($prontuario, $nome){
	$pdo = db_connect();
	if ($prontuario != "" AND $nome == ""){
	$resultado_internacao =  $pdo->prepare("SELECT internacao.*, paciente.pac_nome FROM internacao INNER JOIN paciente ON internacao.interna_pac_id = paciente.pac_id WHERE internacao.interna_pac_id = (SELECT pac_id FROM paciente WHERE pac_prontuario = '$prontuario')");	
	$resultado_internacao->execute();
	return $resultado_internacao;
}elseif($prontuario == "" AND $nome != ""){
	/*$resultado_internacao =  $pdo->prepare("SELECT internacao.*, paciente.pac_nome FROM internacao INNER JOIN paciente ON internacao.interna_pac_id = paciente.pac_id WHERE internacao.interna_pac_id = (SELECT pac_id FROM paciente WHERE pac_nome like '%$nome%')");*/
	$resultado_internacao = $pdo->prepare("SELECT i.*, p.pac_nome
     FROM internacao i 
     , paciente  p
		WHERE i.interna_pac_id = p.pac_id
   		AND p.pac_nome like '%$nome%'");	
	$resultado_internacao->execute();
	return $resultado_internacao;
}else{
	$resultado_internacao =  $pdo->prepare("SELECT internacao.*, paciente.pac_nome FROM internacao INNER JOIN paciente ON internacao.interna_pac_id = paciente.pac_id ORDER BY paciente.pac_nome");	
	$resultado_internacao->execute();
	return $resultado_internacao;
	$pdo = null;
}
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

//Relatórios
function pesquisarInternacaoSexo($sexo, $inicio, $fim, $status){
	$pdo = db_connect(); 
	$resultado_rel=  $pdo->prepare("SELECT COUNT(*)
     FROM internacao i 
     , paciente  p
		WHERE i.interna_pac_id = p.pac_id
		AND i.interna_data BETWEEN date('$inicio') AND date('$fim')
   		AND i.interna_status = '$status'
   		AND p.pac_sexo = '$sexo'");
	$resultado_rel->execute();
	$pdo = null;
	return $resultado_rel;
}
function pesquisarInternacaoOrigem($origem, $inicio, $fim, $status){
	$pdo = db_connect(); 
	$resultado_rel=  $pdo->prepare("SELECT COUNT(*)
     FROM internacao i 
     , paciente  p
		WHERE i.interna_pac_id = p.pac_id
		AND i.interna_data BETWEEN date('$inicio') AND date('$fim')
		AND i.interna_status = '$status'
   		AND p.pac_cidade_id = '$origem'");
	$resultado_rel->execute();
	$pdo = null;
	return $resultado_rel;
}
function pesquisarInternacaoIdade($idadeInicio, $idadeFim, $inicio, $fim, $status){
	$pdo = db_connect(); 
	$resultado_rel=  $pdo->prepare("SELECT COUNT(*)
     FROM internacao i 
     , paciente  p
		WHERE i.interna_pac_id = p.pac_id
		AND i.interna_data BETWEEN date('$inicio') AND date('$fim')
		AND i.interna_status = '$status'
   		AND p.pac_idade BETWEEN '$idadeInicio' AND '$idadeFim'");
	$resultado_rel->execute();
	$pdo = null;
	return $resultado_rel;
}

function pesquisarInternacaoRenda($renda, $inicio, $fim, $status){
	$pdo = db_connect(); 
	$resultado_rel=  $pdo->prepare("SELECT COUNT(*)
     FROM internacao i 
     , paciente  p
		WHERE i.interna_pac_id = p.pac_id
		AND i.interna_data BETWEEN date('$inicio') AND date('$fim')
		AND i.interna_status = '$status'
   		AND p.pac_renda = '$renda'");
	$resultado_rel->execute();
	$pdo = null;
	return $resultado_rel;
}
function pesquisaInternacoes(){
	$pdo = db_connect(); 
	$internacoes=  $pdo->prepare("SELECT COUNT(*) FROM internacao");
	$internacoes->execute();
	$pdo = null;
	return $internacoes;
}

