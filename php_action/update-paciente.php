<?php

session_start();
  if(!isset($_SESSION['usu_id']))
  {
    header("location: index.php");
    exit;
  }

require_once 'init.php';
if(isset($_POST['btn-editar-paciente'])):
	$id = ($_POST['nid']);
	$prontuario = ($_POST['nprontuario']);
	$cadsus = ($_POST['ncadsus']);
	$documento = ($_POST['ndocumento']);
	$cpf = ($_POST['ncpf']);
	$nome = ($_POST['nnome']);
	$endereco = ($_POST['nendereco']);
	$bairro = ($_POST['nbairro']);
	$cidade = ($_POST['ncidade']);
	$estado = ($_POST['nestado']);
	$telefone = ($_POST['ntelefone']);
	$recado = ($_POST['nrecado']);
	$celular = ($_POST['ncelular']);
	$pai = ($_POST['npai']);
	$ppai = ($_POST['nppai']);
	$mae = ($_POST['nmae']);
	$pmae = ($_POST['npmae']);
	$conjugue = ($_POST['nconjugue']);
	$pconjugue = ($_POST['npconjugue']);
	$responsavel = ($_POST['nresponsavel']);
	$vinculo = ($_POST['nvinculoresponsavel']);
	$naturalidade = ($_POST['nnaturalidade']);
	$datanascimento = ($_POST['ndatanascimento']);
	$idade = ($_POST['nidade']);
	$sexo = ($_POST['nsexo']);
	$agregacao = ($_POST['nagregacao']);
	$escolaridade = ($_POST['nescolaridade']);
	$pessoas = ($_POST['npessoas']);
	$pessoasrend = ($_POST['npessoasrend']);
	$renda = ($_POST['nrenda']);
	$casa = ($_POST['ncasa']);
	$construcaocasa = ($_POST['nconstrucaocasa']);
	$comodos = ($_POST['ncomodos']);
	$esgoto = ($_POST['nesgoto']);
	$agua = ($_POST['nagua']);
	$luz = ($_POST['nluz']);
	$ocupacao = ($_POST['nocupacao']);
	if ($ocupacao == "Do lar" || $ocupacao == "Estudante" || $ocupacao == "Desempregado"){
		$profissao = "";
		$localtrabalho = "";
	}else{
		$profissao = ($_POST['nprofissao']);
		$localtrabalho = ($_POST['nlocaltrabalho']);
	}
	$relacaotrabalhista = ($_POST['nrelacaotrabalhista']);
	$vinculoprevidenciario = ($_POST['nvinculoprevidenciario']);
	$orgaovinculacao = ($_POST['norgaovinculacao']);
	$usuario = ($_SESSION['usu_id']);



// insere no banco
	$PDO = db_connect();
//$sql = "INSERT INTO users(name, email, password) VALUES(:name, :email, :passwordHash)";
	
	$sql = "UPDATE paciente SET pac_prontuario = :prontuario, pac_cadsus = :cadsus, pac_documento = :documento, pac_cpf = :cpf, pac_nome = :nome, pac_endereco = :endereco, pac_bairro = :bairro, pac_cidade_id = :cidade, pac_estado = :estado, pac_telefone = :telefone, pac_recado = :recado, pac_celular = :celular, pac_nome_pai = :pai, pac_prof_pai = :ppai, pac_nome_mae = :mae, pac_prof_mae = :pmae, pac_conjugue = :conjugue, pac_prof_conjugue = :pconjugue, pac_responsavel = :responsavel, pac_responsavel_vinc = :vinculo, pac_naturalidade = :naturalidade, pac_nascimento = :datanascimento, pac_idade = :idade, pac_sexo = :sexo, pac_agregacao = :agregacao, pac_escolaridade = :escolaridade, pac_pessoas_res = :pessoas, pac_pessoas_rend = :pessoasrend, pac_renda = :renda, pac_tipo_casa = :casa, pac_const_casa = :construcaocasa, pac_comodos = :comodos, pac_esgoto = :esgoto, pac_agua = :agua, pac_luz = :luz, pac_ocupa = :ocupacao, pac_profissao = :profissao, pac_local_trabalho = :localtrabalho, pac_relacao_trabalhista = :relacaotrabalhista, pac_vinculo_prev = :vinculoprevidenciario, pac_orgao_vinc = :orgaovinculacao, pac_usu_id = :usuario WHERE pac_id = :id";

	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':prontuario', $prontuario);
	$stmt->bindParam(':cadsus', $cadsus);
	$stmt->bindParam(':documento', $documento);
	$stmt->bindParam(':cpf', $cpf);
	$stmt->bindParam(':nome', $nome); 
	$stmt->bindParam(':endereco', $endereco);
	$stmt->bindParam(':bairro', $bairro);
	$stmt->bindParam(':cidade', $cidade);
	$stmt->bindParam(':estado', $estado);
	$stmt->bindParam(':telefone', $telefone);
	$stmt->bindParam(':recado', $recado);
	$stmt->bindParam(':celular', $celular);
	$stmt->bindParam(':pai', $pai);
	$stmt->bindParam(':ppai', $ppai);
	$stmt->bindParam(':mae', $mae);
	$stmt->bindParam(':pmae', $pmae);
	$stmt->bindParam(':conjugue', $conjugue);
	$stmt->bindParam(':pconjugue', $pconjugue);
	$stmt->bindParam(':responsavel', $responsavel);
	$stmt->bindParam(':vinculo', $vinculo);
	$stmt->bindParam(':naturalidade', $naturalidade);
	$stmt->bindParam(':datanascimento', $datanascimento);
	$stmt->bindParam(':idade', $idade);
	$stmt->bindParam(':sexo', $sexo);
	$stmt->bindParam(':agregacao', $agregacao);
	$stmt->bindParam(':escolaridade', $escolaridade);
	$stmt->bindParam(':pessoas', $pessoas);
	$stmt->bindParam(':pessoasrend', $pessoasrend);
	$stmt->bindParam(':renda', $renda);
	$stmt->bindParam(':casa', $casa);
	$stmt->bindParam(':construcaocasa', $construcaocasa);
	$stmt->bindParam(':comodos', $comodos);
	$stmt->bindParam(':esgoto', $esgoto);
	$stmt->bindParam(':agua', $agua);
	$stmt->bindParam(':luz', $luz);
	$stmt->bindParam(':ocupacao', $ocupacao);
	$stmt->bindParam(':profissao', $profissao);
	$stmt->bindParam(':localtrabalho', $localtrabalho);
	$stmt->bindParam(':relacaotrabalhista', $relacaotrabalhista);
	$stmt->bindParam(':vinculoprevidenciario', $vinculoprevidenciario);
	$stmt->bindParam(':orgaovinculacao', $orgaovinculacao);
	$stmt->bindParam(':usuario', $usuario);
	$stmt->bindParam(':id', $id, PDO::PARAM_INT);


	if ($stmt->execute())
	{
		$_SESSION['usu_msg'] = "Paciente alterado com sucesso!";
		header('Location: ../message1.php');
	}
	else
	{
		echo "Erro ao alterar";
		print_r($stmt->errorInfo());
	}
endif;