<?php

require_once 'init.php';
if(isset($_POST['btn-atualizar-internacao'])):
	$id = ($_POST['nid']);
	$data = ($_POST['ndatainternacao']);
	$admissao = ($_POST['nadmissao']);
	$clinica = ($_POST['nclinica']);
	$leito = ($_POST['nleito']);
	$diagnostico = ($_POST['ndiagnostico']);
	$status = ($_POST['nstatus']);	
	$idpaciente = ($_POST['npac_id']);

// insere no banco
	$PDO = db_connect();
//$sql = "INSERT INTO users(name, email, password) VALUES(:name, :email, :passwordHash)";
	$sql = "UPDATE internacao SET interna_data = :data, interna_admissao = :admissao, interna_clinica = :clinica, interna_leito = :leito, interna_diagnostico = :diagnostico, interna_status = :status, interna_pac_id = :idpaciente WHERE interna_id = :id";

	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':data', $data);
	$stmt->bindParam(':admissao', $admissao);
	$stmt->bindParam(':clinica', $clinica);
	$stmt->bindParam(':leito', $leito);
	$stmt->bindParam(':diagnostico', $diagnostico);	
	$stmt->bindParam(':status', $status);	
	$stmt->bindParam(':idpaciente', $idpaciente);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);

	if ($stmt->execute())
	{
		header('Location: ../pesquisar-internacao.php');
	}
	else
	{
		echo "Erro ao alterar";
		print_r($stmt->errorInfo());
	}
endif;