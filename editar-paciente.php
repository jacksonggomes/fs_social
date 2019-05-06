<?php
session_start();
  if(!isset($_SESSION['usu_id']))
  {
    header("location: index.php");
    exit;
  }
// Header
include_once 'includes/header.php';
include_once 'includes/scripts.php';
include_once 'includes/functions.php';

// Header
include_once 'includes/header.php';
if(isset($_GET['pac_id'])):
  $resultado = pesquisarPacienteId($_GET['pac_id']);
endif;
?>

<div class="column middle">
  <div class="container">
    <form id="formulario" action="php_action/update-paciente.php" method="POST">
      <fieldset id="paciente">
        <?php foreach ($resultado as $dados): ?>
          <legend>1. Dados do Paciente</legend>
          <div class="row">
            <div class="col-75"><input type="hidden" id="id" name="nid" value="<?php echo $dados['pac_id'];?>"></div>
          </div>
          <div class="row">
            <div class="col-25"><label for="fia">PRONTUÁRIO</label></div>
            <div class="col-75"><input type="text" id="fia" name="nfia" value="<?php echo $dados['pac_fia'];?>" pattern="[0-9]+$"></div>
          </div>
          <div class="row">
            <div class="col-25"><label for="cadsus">CADSUS</label></div>
            <div class="col-75"><input type="text" id="cadsus" name="ncadsus" value="<?php echo $dados['pac_cadsus'];?>" pattern="[0-9]+$"></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="documento">Documento</label></div>
            <div class="col-75"><input type="text" id="documento" name="ndocumento" value="<?php echo $dados['pac_documento'];?>" pattern="[0-9]+$"></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="cpf">CPF</label></div>
            <div class="col-75"><input type="text" id="cpf" name="ncpf" value="<?php echo $dados['pac_cpf'];?>" readonly></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="nome">Nome</label></div>
            <div class="col-75"><input type="text" id="nome" name="nnome" value="<?php echo $dados['pac_nome'];?>"></div>
          </div>

          <div class="row">
            <div class="row"><div class="col-25"><label for="endereco">Endereço</label></div>
            <div class="col-75"><input type="text" id="endereco" name="nendereco" value="<?php echo $dados['pac_endereco'];?>"></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="bairro">Bairro</label></div>
            <div class="col-75">
              <select id="bairro" name="nbairro">
                <?php $dados1 = pesquisarBairroPaciente($dados['pac_bairro_id']);
                if (count($dados1)):
                  foreach ($dados1 as $bairro): ?>
                    <option value="<?php echo $bairro['id_bairro'] ?>" selected><?php echo $bairro['desc_bairro']; ?></option>
                  <?php endforeach; 
                endif;?>
                <?php $resultado_bairro = listarBairro();
                if(count($resultado_bairro)):
                  foreach ($resultado_bairro as $bairro):?>
                    <option value="<?php echo $bairro['id_bairro'] ?>"><?php echo $bairro['desc_bairro'] ?></option>
                    <?php 
                  endforeach;
                endif; ?>
              </select>
            </div>
          </div>

      <div class="row">
        <div class="col-25"><label for="telefone">Telefone</label></div>
        <div class="col-75"><input type="text" data-mask="(00) 0000-0000" class="form-control" placeholder="Telefone" id="telefone" name="ntelefone" value="<?php echo $dados['pac_telefone'];?>"></div>
      </div>

      <div class="row">
          <div class="col-25"><label for="recado">Recado</label></div>
          <div class="col-75"><input type="text" placeholder="Recado com.." id="recado" name="nrecado" value="<?php echo $dados['pac_recado'];?>"></div>
        </div>

        <div class="row">
          <div class="col-25"><label for="celular">Celular</label></div>
          <div class="col-75"><input type="text" data-mask="(00) 00000-0000" class="form-control" placeholder="Celular" id="celular" name="ncelular" value="<?php echo $dados['pac_celular'];?>"></div>
        </div>

      <div class="row">
        <div class="col-25"><label for="pai">Pai</label></div>
        <div class="col-75"><input type="text" id="pai" name="npai" value="<?php echo $dados['pac_nome_pai'];?>"></div>              
      </div>

      <div class="row">
        <div class="col-25"><label for="ppai">Profissão do pai</label></div>
        <div class="col-75"><input type="text" id="ppai" name="nppai" value="<?php echo $dados['pac_prof_pai'];?>"></div>
      </div>

      <div class="row">
        <div class="col-25"><label for="mae">Mãe</label></div>
        <div class="col-75"><input type="text" id="mae" name="nmae" value="<?php echo $dados['pac_nome_mae'];?>"></div>
      </div>

      <div class="row">
        <div class="col-25"><label for="pmae">Profissão da mãe</label></div>
        <div class="col-75"><input type="text" id="pmae" name="npmae" value="<?php echo $dados['pac_prof_mae'];?>"></div>
      </div>

      <div class="row">
        <div class="col-25"><label for="conjugue">Conjugue</label></div>
        <div class="col-75"><input type="text" id="conjugue" name="nconjugue" value="<?php echo $dados['pac_conjugue'];?>"></div>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="pconjugue">Profissão do conjugue</label></div>
      <div class="col-75"><input type="text" id="pconjugue" name="npconjugue" value="<?php echo $dados['pac_prof_conjugue'];?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="responsavel">Responsável</label></div>
      <div class="col-75"><input type="text" id="responsavel" name="nresponsavel" value="<?php echo $dados['pac_responsavel'];?>"></div>
    </div>

    <div class="row">
      <div class="col-25"><label for="vresponsavel">Vínculo</label></div>
      <div class="col-75">
        <select id="vresponsavel" name="nvinculoresponsavel">
          <option value="<?php echo $dados['pac_responsavel_vinc'];?>"selected><?php echo $dados['pac_responsavel_vinc'];?></option>
          <option value="Pai">1) Pai</option>
          <option value="Mãe">2) Mãe</option>
          <option value="Irmão/Irmã">3) Irmão / Irmã</option>
          <option value="Tio/Tia">4) Tio / Tia</option>
          <option value="Avô/Avó">5) Avô / Avó</option>
          <option value="Amigo/Amiga">6) Amigo / Amiga</option>
          <option value="Vizinho/Vizinha">7) Vizinho / Vizinha</option>
        </select>
      </div>
    </div>

    <div class="row">
            <div class="col-25"><label for="cidade">Cidade do paciente</label></div>
            <div class="col-75">
              <select id="cidade" name="ncidade">
               <?php $dados2 = pesquisarCidadePaciente($dados['pac_cidade_id']);
               if(count($dados2)):
                foreach ($dados2 as $cidade): ?>
                 <option value="<?php echo $cidade['id_cidade'] ?>" selected><?php echo $cidade['cid_desc']; ?></option>
               <?php endforeach;
             endif; ?>
             <?php $resultado_cidade = listarCidade();
             if(count($resultado_cidade)):
              foreach ($resultado_cidade as $cidade):?>
                <option value="<?php echo $cidade['id_cidade'] ?>"><?php echo $cidade['cid_desc'] ?></option>
                <?php 
              endforeach;
            endif; ?>
          </select>
        </div>
      </div>

      <div class="row">
        <div class="col-25"><label for="estado">Estado de onde o paciente veio</label></div>
        <div class="col-75">
          <select id="estado" name="nestado">
            <option value="<?php echo $dados['pac_estado'];?>" selected><?php echo $dados['pac_estado'];?></option>
            <optgroup label="Região Norte">
              <option value="Amazonas">1 - Amazonas</option>
              <option value="Roraima">2 - Roraima (RR)</option>
              <option value="Amapá">3 - Amapá (AP)</option>
              <option value="Pará">4 - Pará (PA)</option>
              <option value="Tocantins">5 - Tocantins (TO)</option>
              <option value="Rondônia">6 - Rondônia (RO)</option>
              <option value="Acre">7 - Acre (AC</option>
            </optgroup>
            <optgroup label="Região Nordeste">
              <option value="Maranhão">8 - Maranhão</option>
              <option value="Piauí">9 - Piauí (PI)</option>
              <option value="Ceará">10 - Ceará (CE)</option>
              <option value="Rio Grande do Norte">11 - Rio Grande do Norte (RN)</option>
              <option value="Pernambuco">12 - Pernambuco (PE)</option>
              <option value="Paraíba">13 - Paraíba (PB)</option>
              <option value="Sergipe">14 - Sergipe (SE)</option>
              <option value="Alagoas">15 - Alagoas (AL)</option>
              <option value="Bahia">16 - Bahia (BA)</option>
            </optgroup>
            <optgroup label="Região Centro-Oeste">
              <option value="Mato Grosso">17 - Mato Grosso (MT)</option>
              <option value="Mato Grosso do Sul">18 - Mato Grosso do Sul (MS)</option>
              <option value="Goiás">19 - Goiás (GO)</option>
            </optgroup>
            <optgroup label="Região Sudeste">
              <option value="São Paulo">20 - São Paulo (SP)</option>
              <option value="Rio de Janeiro">21 - Rio de Janeiro (RJ)</option>
              <option value="Espírito Santo">22 - Espírito Santo (ES)</option>
              <option value="Minas Gerais">23 - Minas Gerais (MG)</option>
            </optgroup>
            <optgroup label="Região Sul">
              <option value="Paraná">24 - Paraná (PR)</option>
              <option value="Rio Grande do Sul">25 - Rio Grande do Sul (RS)</option>
              <option value="Santa Catarina">26 - Santa Catarina (SC)</option>
            </optgroup>
          </select>
        </div>
      </div>

    <div class="row">
      <div class="col-25"><label for="naturalidade">Naturalidade</label></div>
      <div class="col-75"><input type="text" id="naturalidade" name="nnaturalidade" value="<?php echo $dados['pac_naturalidade'];?>"></div>
    </div>

    <div class="row">
      <div class="col-25"><label for="datanascimento">Data de nascimento</label></div>
      <div class="col-75"><input type="date" id="datanascimento" name="ndatanascimento" value="<?php echo $dados['pac_nascimento'];?>"></div>
    </div>

    <div class="row">
      <div class="col-25"><label for="idade">Idade</label></div>
      <div class="col-75"><input type="num" id="idade" name="nidade" value="<?php echo $dados['pac_idade'];?>" readonly></div>
    </div>

    <div class="row">            
      <fieldset id="sexo"><legend>Sexo:</legend>
        <input type="radio" value="Masculino" name="nsexo" id="cMasc" <?php if($dados['pac_sexo']=='Masculino'){echo 'checked';}?>><label for="cMasc">Masculino</label>
        <input type="radio" value="Feminino" name="nsexo" id="cFem" <?php if($dados['pac_sexo']=='Feminino'){echo 'checked';}?>><label for="cFem">Feminino</label>
      </fieldset>
    </div>          

    <div class="row">
      <div class="col-25"><label for="agregacao">Agregação familiar</label></div>
      <div class="col-75">
        <select id="agregacao" name="nagregacao">
          <option value="<?php echo $dados['pac_agregacao'];?>" selected><?php echo $dados['pac_agregacao'];?></option>
          <option value="Reside Sozinho">1) Reside Sozinho</option>
          <option value="Reside com pais e/ou irmãos">2) Reside com pais e/ou irmãos</option>
          <option value="Rezide com amigos">3) Rezide com amigos</option>
          <option value="Rezide com esposo(a) e/ou filhos">4) Rezide com esposo(a) e/ou filhos</option>
          <option value="Sem residência fixa">5) Sem residência fixa</option>
          <option value="Sem residência">6) Sem residência</option>
          <option value="Instituição">7) Instituição</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="escolaridade">Escolaridade</label></div>
      <div class="col-75">
        <select id="escolaridade" name="nescolaridade">
          <option value="<?php echo $dados['pac_escolaridade'];?>" selected><?php echo $dados['pac_escolaridade'];?></option>
          <option value="Não alfabetizado">1) Não alfabetizado</option>
          <option value="Alfabetizado">2) Alfabetizado</option>
          <option value="FIE">3) FIE</option>
          <option value="Fundamental incompleto">4) Fundamental incompleto</option>
          <option value="Fundamental completo">5) Fundamental completo</option>
          <option value="Médio incompleto">6) Médio incompleto</option>
          <option value="Médio completo">7) Médio completo</option>
          <option value="Superior incompleto">8) Superior incompleto</option>
          <option value="Superior completo">9) Superior completo</option>
        </select>
      </div>
    </div>
  </fieldset>
  <br>
  <fieldset id="paciente">
    <legend>2. Dados Socio-econômicos</legend>
    <div class="row">
      <div class="col-25"><label for="pessoas">Nº de pessoas na residência</label></div>
      <div class="col-75">
        <select id="pessoas" name="npessoas">
          <option value="<?php echo $dados['pac_pessoas_res'];?>" selected><?php echo $dados['pac_pessoas_res'];?></option>
          <option value="01 a 03">1) 01 a 03 pessoas</option>
          <option value="04 a 06">2) 04 a 06 pessoas</option>
          <option value="07 a 09">3) 07 a 09 pessoas</option>
          <option value="10 ou mais">4) 10 ou mais pessoas</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="pessoasrend">Nº de pessoas na residência que têm rendimentos</label></div>
      <div class="col-75"><input type="number" name="npessoasrend" id="pessoasrend" min="0" max="10" value="<?php echo $dados['pac_pessoas_rend'];?>"></div>
    </div>

    <div class="row">
        <div class="col-25"><label for="renda">Renda familiar</label></div>
        <div class="col-75">
          <select id="renda" name="nrenda">
            <option value="<?php echo $dados['pac_renda'];?>" selected><?php echo $dados['pac_renda'];?></option>
            <option value="Até 01 SM">1) Até 01 SM</option>
            <option value="Mais de 01 até 03 SM">2) Mais de 01 até 03 SM</option>
            <option value="Mais de 03 até 05 SM">3) Mais de 03 até 05 SM</option>
            <option value="Mais de 05 até 07 SM">4) Mais de 05 até 07 SM</option>
            <option value="Mais de 07 SM">4) Mais de 07 SM</option>
            <option value="Sem renda">5) Sem renda</option>
          </select>
        </div>
      </div>

    <div class="row">
      <div class="col-25"><label for="casa">Casa</label></div>
      <div class="col-75">
        <select id="casa" name="ncasa">
          <option value="<?php echo $dados['pac_tipo_casa'];?>" selected><?php echo $dados['pac_tipo_casa'];?></option>
          <option value="Própria">1) Própria</option>
          <option value="Cedida">2) Cedida</option>
          <option value="Alugada">3) Alugada</option>
          <option value="Invasão">4) Invasão</option>
          <option value="Instituição">5) Instituição</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25"><label for="construcaocasa">Construção da casa</label></div>
      <div class="col-75">
        <select id="contrucaocasa" name="nconstrucaocasa">
          <option value="<?php echo $dados['pac_const_casa'];?>" selected><?php echo $dados['pac_const_casa'];?></option>
          <option value="Alvenaria">1) Alvenaria</option>
          <option value="Madeira">2) Madeira</option>
          <option value="Taipa">3) Taipa</option>
          <option value="Palha">4) Palha</option>
          <option value="Palafita">5) Palafita</option>
          <option value="Flutuante">6) Flutuante</option>
        </select>
      </div>
    </div>

    <div class="row">
        <div class="col-25"><label for="comodos">Nº de comodos</label></div>
        <div class="col-75"><input type="number" name="ncomodos" id="comodos" min="0" max="20" value="<?php echo $dados['pac_comodos'];?>"></div>
      </div>

    <div class="row">
      <div class="col-25"><label for="esgoto">Esgoto</label></div>
      <div class="col-75">
        <select id="esgoto" name="nesgoto">
          <option value="<?php echo $dados['pac_esgoto'];?>" selected><?php echo $dados['pac_esgoto'];?></option>
          <option value="Tubulação">1) Tubulação</option>
          <option value="Fossa biológica">2) Fossa biológica</option>
          <option value="Não possui">3) Céu aberto</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="agua">Água</label></div>
      <div class="col-75">
        <select id="agua" name="nagua">
          <option value="<?php echo $dados['pac_agua'];?>"selected><?php echo $dados['pac_agua'];?></option>
          <option value="Rede básica">1) Rede básica</option>
          <option value="Poço artesiano">2) Poço artesiano</option>
          <option value="Da chuva">3) Da chuva</option>
          <option value="Do rio">4) Do rio</option>
          <option value="Carro Pipa">5) Carro pipa</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25"><label for="luz">Luz</label></div>
      <div class="col-75">
        <select id="luz" name="nluz">
          <option value="<?php echo $dados['pac_luz'];?>" selected><?php echo $dados['pac_luz'];?></option>
          <option value="Elétrica regularizada">1) Elétrica regularizada</option>
          <option value="Gerador de energia">2) Gerador de energia</option>
          <option value="Solar">3) Solar</option>
          <option value="Outros">4) Outros</option>
        </select>
      </div>
    </div>
  </fieldset>

  <fieldset id="dadosprevidenciarios">
    <legend>3. Dados profissionais e previdenciários</legend>
    <div class="row">
      <div class="col-25"><label for="ocupacao">Ocupação atual</label></div>
      <div class="col-75">
        <select id="ocupacao" name="nocupacao" onchange="verifica(this.value)">
          <option value="<?php echo $dados['pac_ocupa'];?>" selected><?php echo $dados['pac_ocupa'];?></option>
          <option value="Do lar">1) Do lar</option>
          <option value="Estudante">2) Estudante</option>
          <option value="Desempregado">3) Desempregado</option>
          <option value="Outros">4) Outros</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="profissao">Profissão</label></div>
      <div class="col-75"><input type="text" id="profissao" name="nprofissao" value="<?php echo $dados['pac_profissao'];?>" disebled></div>
    </div>

    <div class="row">
      <div class="col-25"><label for="localtrabalho">Local de trabalho</label></div>
      <div class="col-75"><input type="text" id="localtrabalho" name="nlocaltrabalho" value="<?php echo $dados['pac_local_trabalho'];?>" disebled></div>
    </div>

    <div class="row">
      <div class="col-25"><label for="relacaotrabalhista">Relação trabalhista</label></div>
      <div class="col-75">
        <select id="relacaotrabalhista" name="nrelacaotrabalhista">
          <option value="<?php echo $dados['pac_relacao_trabalhista'];?>" selected><?php echo $dados['pac_relacao_trabalhista'];?></option>
          <option value="CLT">1) CLT</option>
          <option value="Estatutário">2) Estatutário</option>
          <option value="Autônomo">3) Avulso</option>
          <option value="Outros">4) Outros</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="vinculoprevidenciario">Vínculo previdenciário</label></div>
      <div class="col-75">
        <select id="vinculoprevidenciario" name="nvinculoprevidenciario">
          <option value="<?php echo $dados['pac_vinculo_prev'];?>" selected><?php echo $dados['pac_vinculo_prev'];?></option>
          <option value="Empregado">1) Empregado</option>
          <option value="Empregador">2) Empregador</option>
          <option value="Autônomo">3) Autônomo</option>
          <option value="Aposentado">4) Aposentado</option>
          <option value="Pensionista">5) Pensionista</option>
          <option value="Dependente">6) Dependente</option>
          <option value="Em periodo de graça">7) Em periodo de graça</option>
          <option value="Beneficiario (BPC)">8) Beneficiario (BPC)</option>
          <option value="NTV">9) NTV</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="orgaovinculacao">Orgão de vinculação</label></div>
      <div class="col-75">
        <select id="orgaovinculacao" name="norgaovinculacao">
          <option value="<?php echo $dados['pac_orgao_vinc'];?>" selected><?php echo $dados['pac_orgao_vinc'];?></option>
          <option value="INSS">1) INSS</option>
          <option value="Amazon PREV">2) Amazon PREV</option>
          <option value="Manaus Prev">3) Manaus Prev</option>
          <option value="RJU">4) RJU</option>
          <option value="Outros">5) Outros</option>
        </select>
      </div>
    </div>
  </fieldset>
  <?php endforeach; ?>
  <div class="row">
    <input type="submit" name="btn-editar-paciente" value="Salvar">
  </div>        
</form>
</div>
</div>    
</div>
<!--Script-->
<script type="text/javascript">

  //calcula data_nascimento
  document.getElementById("datanascimento").addEventListener('change', function () {
    var data = new Date(this.value);
    if (isDate_(this.value) && data.getFullYear() > 1900)
      document.getElementById("idade").value = calculateAge(this.value);
  });

  function calculateAge(dobString) {
    var dob = new Date(dobString);
    var currentDate = new Date();
    var currentYear = currentDate.getFullYear();
    var birthdayThisYear = new Date(currentYear, dob.getMonth(), dob.getDate());
    var age = currentYear - dob.getFullYear();
    if (birthdayThisYear > currentDate) {
      age--;
    }
    return age;
  }

  function calcular(data) {
    var data = document.form.nascimento.value;
    alert(data);
    var partes = data.split("/");
    var junta = partes[2] + "-" + partes[1] + "-" + partes[0];
    document.form.idade.value = calculateAge(junta);
  }

  var isDate_ = function (input) {
    var status = false;
    if (!input || input.length <= 0) {
      status = false;
    } else {
      var result = new Date(input);
      if (result == 'Invalid Date') {
        status = false;
      } else {
        status = true;
      }
    }
    return status;
  };
</script>
<?php
// Footer
include_once 'includes/footer.php';
?>
