<?php
// Conexão
include_once 'php_action/init.php';

function listarBairro(){
	$pdo = db_connect(); 
	$resultado_bairro = $pdo->prepare("SELECT * FROM bairro");
	$resultado_bairro->execute();
	return $resultado_bairro;	
	$pdo = null;	
}
function listarCidade(){
	$pdo = db_connect(); 
	$resultado_cidade = $pdo->prepare("SELECT * FROM cidade");
	$resultado_cidade->execute();
	return $resultado_cidade;
	$pdo = null;
}

function pesquisarPaciente($pac_cadsus){
	$pdo = db_connect(); 
	$resultado_paciente = $pdo->prepare("SELECT * FROM paciente WHERE pac_cadsus = '$pac_cadsus'");
	$resultado_paciente->execute();
	return $resultado_paciente;
	$pdo = null;
}

function pesquisarPacienteId($pac_id){
	$pdo = db_connect(); 
	$resultado_paciente = $pdo->prepare("SELECT * FROM paciente WHERE pac_id = '$pac_id'");
	$resultado_paciente->execute();
	return $resultado_paciente;
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

