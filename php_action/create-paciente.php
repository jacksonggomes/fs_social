<?php

require_once 'init.php';

if(isset($_POST['btn-cadastrar-paciente'])):
	$fia = ($_POST['nfia']);
	$cadsus = ($_POST['ncadsus']);
	$cpf = ($_POST['ncpf']);
	$nome = ($_POST['nnome']);
	$endereco = ($_POST['nendereco']);
	$bairro = ($_POST['nbairro']);
	$cidade = ($_POST['ncidade']);
	$estado = ($_POST['nestado']);
	$telefone = ($_POST['ntelefone']);
	$pai = ($_POST['npai']);
	$ppai = ($_POST['nppai']);
	$mae = ($_POST['nmae']);
	$pmae = ($_POST['npmae']);
	$conjugue = ($_POST['nconjugue']);
	$pconjugue = ($_POST['npconjugue']);
	$responsavel = ($_POST['nresponsavel']);
	$vinculo = ($_POST['nvinculoresponsavel']);
	$naturalidade = ($_POST['nnaturalidade']);
	$procedencia = ($_POST['nprocedencia']);
	$datanascimento = ($_POST['ndatanascimento']);
	$idade = ($_POST['nidade']);
	$sexo = ($_POST['nsexo']);
	$agregacao = ($_POST['nagregacao']);
	$escolaridade = ($_POST['nescolaridade']);
	$pessoas = ($_POST['npessoas']);
	$pessoasrend = ($_POST['npessoasrend']);
	$casa = ($_POST['nfia']);
	$construcaocasa = ($_POST['nconstrucaocasa']);
	$comodos = ($_POST['ncomodos']);
	$esgoto = ($_POST['nesgoto']);
	$agua = ($_POST['nagua']);
	$luz = ($_POST['nluz']);
	$ocupacao = ($_POST['nocupacao']);
	$localtrabalho = ($_POST['nlocaltrabalho']);
	$relacaotrabalhista = ($_POST['nrelacaotrabalhista']);
	$vinculoprevidenciario = ($_POST['nvinculoprevidenciario']);
	$orgaovinculacao = ($_POST['norgaovinculacao']);


// a data vem no formato dd/mm/YYYY
// então precisamos converter para YYYY-mm-dd
//$isoDate = dateConvert($birthdate);
//$datanascimento = formData($datanascimentos);
// cria o hash da senha
//$passwordHash = make_hash($password);

// insere no banco
	$PDO = db_connect();
//$sql = "INSERT INTO users(name, email, password) VALUES(:name, :email, :passwordHash)";
	$sql = "INSERT INTO paciente (pac_fia, pac_cadsus, pac_cpf, pac_nome, pac_endereco, pac_bairro_id, pac_cidade_id, pac_estado, pac_telefone, pac_nome_pai, pac_prof_pai, pac_nome_mae, pac_prof_mae, pac_conjugue, pac_prof_conjugue, pac_responsavel, pac_responsavel_vinc, pac_naturalidade, pac_procedencia, pac_nascimento, pac_idade, pac_sexo, pac_agregacao, pac_escolaridade, pac_pessoas_res, pac_pessoas_rend, pac_tipo_casa, pac_const_casa, pac_comodos, pac_esgoto, pac_agua, pac_luz, pac_ocupa, pac_local_trabalho, pac_relacao_trabalhista, pac_vinculo_prev, pac_orgao_vinc) 
	VALUES (:fia, :cadsus, :cpf, :nome, :endereco, :bairro, :cidade, :estado, :telefone, :pai, :ppai, :mae, :pmae, :conjugue, :pconjugue, :responsavel, :vinculo, :naturalidade, :procedencia, :datanascimento, :idade, :sexo, :agregacao, :escolaridade, :pessoas, :pessoasrend, :casa, :construcaocasa, :comodos, :esgoto, :agua, :luz, :ocupacao, :localtrabalho, :relacaotrabalhista, :vinculoprevidenciario, :orgaovinculacao)";
	$stmt = $PDO->prepare($sql);
	$stmt->bindParam(':fia', $fia);
	$stmt->bindParam(':cadsus', $cadsus);
	$stmt->bindParam(':cpf', $cpf);
	$stmt->bindParam(':nome', $nome); 
	$stmt->bindParam(':endereco', $endereco);
	$stmt->bindParam(':bairro', $bairro);
	$stmt->bindParam(':cidade', $cidade);
	$stmt->bindParam(':estado', $estado);
	$stmt->bindParam(':telefone', $telefone);
	$stmt->bindParam(':pai', $pai);
	$stmt->bindParam(':ppai', $ppai);
	$stmt->bindParam(':mae', $mae);
	$stmt->bindParam(':pmae', $pmae);
	$stmt->bindParam(':conjugue', $conjugue);
	$stmt->bindParam(':pconjugue', $pconjugue);
	$stmt->bindParam(':responsavel', $responsavel);
	$stmt->bindParam(':vinculo', $vinculo);
	$stmt->bindParam(':naturalidade', $naturalidade);
	$stmt->bindParam(':procedencia', $procedencia);
	$stmt->bindParam(':datanascimento', $datanascimento);
	$stmt->bindParam(':idade', $idade);
	$stmt->bindParam(':sexo', $sexo);
	$stmt->bindParam(':agregacao', $agregacao);
	$stmt->bindParam(':escolaridade', $escolaridade);
	$stmt->bindParam(':pessoas', $pessoas);
	$stmt->bindParam(':pessoasrend', $pessoasrend);
	$stmt->bindParam(':casa', $casa);
	$stmt->bindParam(':construcaocasa', $construcaocasa);
	$stmt->bindParam(':comodos', $comodos);
	$stmt->bindParam(':esgoto', $esgoto);
	$stmt->bindParam(':agua', $agua);
	$stmt->bindParam(':luz', $luz);
	$stmt->bindParam(':ocupacao', $ocupacao);
	$stmt->bindParam(':localtrabalho', $localtrabalho);
	$stmt->bindParam(':relacaotrabalhista', $relacaotrabalhista);
	$stmt->bindParam(':vinculoprevidenciario', $vinculoprevidenciario);
	$stmt->bindParam(':orgaovinculacao', $orgaovinculacao);


	if ($stmt->execute())
	{
		header('Location: ../pesquisar-paciente.php');
	}
	else
	{
		echo "Erro ao alterar";
		print_r($stmt->errorInfo());
	}
endif;