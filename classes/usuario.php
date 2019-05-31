<?php
Class Usuario
{
	private $pdo;
	public $msgErro="";//tudo ok
	public function conectar($nome, $host, $usuario, $senha)
	{
		global $pdo, $msgErro;
		try
		{
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host, $usuario, $senha, array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                PDO::ATTR_PERSISTENT => false,
                PDO::ATTR_EMULATE_PREPARES => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
            ));
		}catch(PDOException $e){
			$msgErro = $e->getMessage();
		}
	}
	public function cadastrar($nome, $cargo, $perfil, $login, $senha){
		global $pdo;
		//Verificar se já existe o login cadastrado
		$sql = $pdo->prepare("SELECT usu_id FROM usuario WHERE usu_login = :e");
		$sql->bindValue(":e", $login);
		$sql->execute();
		if($sql->rowCount() > 0)
		{
			return false;
		}
		else{
			//Caso não, cadastrar
			$sql = $pdo->prepare("INSERT INTO usuario(usu_nome, usu_cargo, usu_perfil, usu_login, usu_senha, usu_status) 
			VALUES(:n, :c, :p, :e, :s, :t)");
			$sql->bindValue(":n", $nome);
			$sql->bindValue(":c", $cargo);
			$sql->bindValue(":p", $perfil);
			$sql->bindValue(":e", $login);
			$sql->bindValue(":s", md5($senha));
			$sql->bindValue(":t", "Desativado");
			$sql->execute();
			return true;			
		}		
	}
	public function logar($login, $senha){
		global $pdo;
		//Verificar se o login e senha estão cadastrados, sem sim 
		$sql = $pdo->prepare("SELECT usu_id, usu_nome, usu_perfil FROM usuario WHERE usu_login = :e AND usu_senha = :s AND usu_status = :t");
		$sql->bindValue(":e", $login);
		$sql->bindValue(":s", md5($senha));
		$sql->bindValue(":t", "Ativado");
		$sql->execute();
		if($sql->rowCount() > 0){
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['usu_id'] = $dado['usu_id'];
			$_SESSION['usu_nome'] = $dado['usu_nome'];
			$_SESSION['usu_perfil'] = $dado['usu_perfil'];
			$_SESSION['usu_msg'] = "";
			return true; //logado com sucesso
		}
		else
		{
			return false;//nao foi possível logar
		}
	}
}