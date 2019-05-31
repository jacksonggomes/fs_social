<?php
session_start();
  if(!isset($_SESSION['usu_id']) || $_SESSION['usu_perfil'] != 'Administrador')
  {
    header("location: index.php");
    exit;
  }
require_once 'init.php';
if(isset($_POST['btn-atualizar-usuario'])):
	$id = ($_POST['nid']);
	$nome = ($_POST['nnome']);
	$cargo = ($_POST['ncargo']);
	$perfil = ($_POST['nperfil']);
	$status = ($_POST['nstatus']);
	
		// insere no banco
			$PDO = db_connect();
		//$sql = "INSERT INTO users(name, email, password) VALUES(:name, :email, :passwordHash)";
			$sql = "UPDATE usuario SET usu_nome = :nome, usu_cargo = :cargo, usu_perfil = :perfil, usu_status = :status WHERE usu_id = :id";

			$stmt = $PDO->prepare($sql);
			$stmt->bindParam(':nome', $nome);
			$stmt->bindParam(':cargo', $cargo);
			$stmt->bindParam(':perfil', $perfil);
			$stmt->bindParam(':status', $status);	
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);

			
			if ($stmt->execute())
			{
				$_SESSION['usu_msg'] = "Usuário alterado com sucesso!";
				header('Location: ../message-usuario.php');
			}else
			{
				echo "Erro ao alterar";
				print_r($stmt->errorInfo());
			}
			
endif;