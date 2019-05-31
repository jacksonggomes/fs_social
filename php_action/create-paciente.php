<?php

session_start();
  if(!isset($_SESSION['usu_id']))
  {
    header("location: index.php");
    exit;
  }

require_once 'init.php';

if(isset($_POST['btn-cadastrar-paciente'])):
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


// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
//$isoDate = dateConvert($birthdate);
//$datanascimento = formData($datanascimentos);
// cria o hash da senha
//$passwordHash = make_hash($password);

// insere no banco
	$PDO = db_connect();
	$sql = $PDO->prepare("SELECT pac_id FROM paciente WHERE pac_prontuario = :p");
	$sql->bindValue(":p", $prontuario);
	$sql->execute();
	if($sql->rowCount() > 0):
		$_SESSION['usu_msg'] = "Paciente já cadastrado!";
		header('Location: ../message-erro.php');
	else:
		//$sql = "INSERT INTO users(name, email, password) VALUES(:name, :email, :passwordHash)";
		$sql = "INSERT INTO paciente (pac_entrevista, pac_prontuario, pac_cadsus,pac_documento, pac_cpf, pac_nome, pac_endereco, pac_bairro, pac_cidade_id, pac_estado, pac_telefone, pac_celular, pac_recado, pac_nome_pai, pac_prof_pai, pac_nome_mae, pac_prof_mae, pac_conjugue, pac_prof_conjugue, pac_responsavel, pac_responsavel_vinc, pac_naturalidade, pac_nascimento, pac_idade, pac_sexo, pac_agregacao, pac_escolaridade, pac_pessoas_res, pac_pessoas_rend, pac_renda, pac_tipo_casa, pac_const_casa, pac_comodos, pac_esgoto, pac_agua, pac_luz, pac_ocupa, pac_profissao, pac_local_trabalho, pac_relacao_trabalhista, pac_vinculo_prev, pac_orgao_vinc, pac_usu_id) 
		VALUES (:data_atual, :prontuario, :cadsus, :documento, :cpf, :nome, :endereco, :bairro, :cidade, :estado, :telefone, :recado, :celular, :pai, :ppai, :mae, :pmae, :conjugue, :pconjugue, :responsavel, :vinculo, :naturalidade, :datanascimento, :idade, :sexo, :agregacao, :escolaridade, :pessoas, :pessoasrend, :renda, :casa, :construcaocasa, :comodos, :esgoto, :agua, :luz, :ocupacao, :profissao, :localtrabalho, :relacaotrabalhista, :vinculoprevidenciario, :orgaovinculacao, :usuario)";
		$now = new DateTime();
		$data_atual = $now->format('Y-m-d H:i:s');

		$stmt = $PDO->prepare($sql);
		$stmt->bindParam(':data_atual', $data_atual);
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


		if ($stmt->execute())
		{
			$_SESSION['usu_msg'] = "Paciente adicionado com sucesso!";
			header('Location: ../message1.php');
		}
		else
		{
			echo "Erro ao alterar";
			print_r($stmt->errorInfo());
		}
	endif;
endif;