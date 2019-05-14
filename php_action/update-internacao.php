<?php
session_start();
  if(!isset($_SESSION['usu_id']))
  {
    header("location: index.php");
    exit;
  }
require_once 'init.php';
if(isset($_POST['btn-atualizar-internacao'])):
	$id = ($_POST['nid']);
	$admissao = ($_POST['nadmissao']);
	$clinica = ($_POST['nclinica']);
	$leito = ($_POST['nleito']);
	$diagnostico = ($_POST['ndiagnostico']);
	$status = ($_POST['nstatus']);	
	$movimentacao = ($_POST['nmovimentacao']);
	if($status == "Internado"){
		$movimentacao = NULL;
	}
	$idpaciente = ($_POST['npac_id']);
	$usuario = ($_SESSION['usu_id']);

// insere no banco
	$PDO = db_connect();
//$sql = "INSERT INTO users(name, email, password) VALUES(:name, :email, :passwordHash)";
	$sql = "UPDATE internacao SET interna_admissao = :admissao, interna_clinica = :clinica, interna_leito = :leito, interna_diagnostico = :diagnostico, interna_status = :status, interna_mov = :movimentacao, interna_pac_id = :idpaciente, interna_usu_id = :usuario WHERE interna_id = :id";

	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':admissao', $admissao);
	$stmt->bindParam(':clinica', $clinica);
	$stmt->bindParam(':leito', $leito);
	$stmt->bindParam(':diagnostico', $diagnostico);	
	$stmt->bindParam(':status', $status);
	$stmt->bindParam(':movimentacao', $movimentacao);	
	$stmt->bindParam(':idpaciente', $idpaciente);
	$stmt->bindParam(':usuario', $usuario);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);

	if ($stmt->execute())
	{
		$sql1 = "INSERT INTO demandas (dem_data, dem_status, dem_usu_id) 
		VALUES (:data, :status, :usuario)";
		$stmt = $PDO->prepare($sql1);
		$stmt->bindParam(':data', $movimentacao);
		$stmt->bindParam(':status', $status);
		$stmt->bindParam(':usuario', $usuario);
		if ($stmt->execute())
		{
			$_SESSION['usu_msg'] = "Internação alterada com sucesso!";
			header('Location: ../message.php');
		}
		else
		{
			echo "Erro ao alterar";
			print_r($stmt->errorInfo());
		}
	}
	else
	{
		echo "Erro ao alterar";
		print_r($stmt->errorInfo());
	}
endif;