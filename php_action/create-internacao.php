<?php

require_once 'init.php';

if(isset($_POST['btn-cadastrar-internacao'])):
	$datainternacao = ($_POST['ndatainternacao']);
	$admissao = ($_POST['nadmissao']);
	$clinica = ($_POST['nclinica']);
	$leito = ($_POST['nleito']);
	$diagnostico = ($_POST['ndiagnostico']);
	$idpaciente = ($_POST['npac_id']);
	$status = ($_POST['nstatus']);


// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
//$isoDate = dateConvert($birthdate);
//$datanascimento = formData($datanascimentos);
// cria o hash da senha
//$passwordHash = make_hash($password);

// insere no banco
	$PDO = db_connect();
//$sql = "INSERT INTO users(name, email, password) VALUES(:name, :email, :passwordHash)";
	$sql = "INSERT INTO internacao (interna_data, interna_admissao, interna_clinica, interna_leito, interna_diagnostico, interna_pac_id, interna_status) 
	VALUES (:data, :admissao, :clinica, :leito, :diagnostico, :pac_id, :status)";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':data', $datainternacao);
	$stmt->bindParam(':admissao', $admissao);
	$stmt->bindParam(':clinica', $clinica);
	$stmt->bindParam(':leito', $leito);
	$stmt->bindParam(':diagnostico', $diagnostico);
	$stmt->bindParam(':pac_id', $idpaciente);	
	$stmt->bindParam(':status', $status);
	
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