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
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
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
			$sql = $pdo->prepare("INSERT INTO usuario(usu_nome, usu_cargo, usu_perfil, usu_login, usu_senha) 
			VALUES(:n, :c, :p, :e, :s)");
			$sql->bindValue(":n", $nome);
			$sql->bindValue(":c", $cargo);
			$sql->bindValue(":p", $perfil);
			$sql->bindValue(":e", $login);
			$sql->bindValue(":s", md5($senha));
			$sql->execute();
			return true;			
		}		
	}
	public function logar($login, $senha){
		global $pdo;
		//Verificar se o login e senha estão cadastrados, sem sim 
		$sql = $pdo->prepare("SELECT usu_id FROM usuario WHERE usu_login = :e AND usu_senha = :s");
		$sql->bindValue(":e", $login);
		$sql->bindValue(":s", md5($senha));
		$sql->execute();
		if($sql->rowCount() > 0){
			//entrar no sistema (sessao)
			$dado = $sql->fetch();
			session_start();
			$_SESSION['usu_id'] = $dado['usu_id'];
			return true; //logado com sucesso
		}
		else
		{
			return false;//nao foi possível logar
		}
	}
}