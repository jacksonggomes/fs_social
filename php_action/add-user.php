<?php
 
require_once 'init.php';
 
// pega os dados do formuário
$name = isset($_POST['nome_cad']) ? $_POST['nome_cad'] : null;
$email = isset($_POST['email_cad']) ? $_POST['email_cad'] : null;
$password = isset($_POST['senha_cad']) ? $_POST['senha_cad'] : null;
 
 
// validação (bem simples, só pra evitar dados vazios)
if (empty($name) || empty($email) || empty($password))
{
    echo "Volte e preencha todos os campos";
    exit;
}
 
// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
//$isoDate = dateConvert($birthdate);
// cria o hash da senha
$passwordHash = make_hash($password);
 
// insere no banco
$PDO = db_connect();
$sql = "INSERT INTO users(name, email, password) VALUES(:name, :email, :passwordHash)";
$stmt = $PDO->prepare($sql);
$stmt->bindParam(':name', $name);
$stmt->bindParam(':email', $email);
$stmt->bindParam(':passwordHash', $passwordHash); 
 
if ($stmt->execute())
{
    header('Location: ../index.php');
}
else
{
    echo "Erro ao cadastrar";
    print_r($stmt->errorInfo());
}