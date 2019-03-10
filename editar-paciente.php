<?php
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
    <form id="formulario" action="php_action/update1.php" method="POST">
      <fieldset id="paciente">
        <?php foreach ($resultado as $dados): ?>
          <legend>1. Dados do Paciente</legend>
          <div class="row">
            <div class="col-75"><input type="hidden" id="id" name="nid" value="<?php echo $dados['pac_id'];?>"></div>
          </div>
          <div class="row">
            <div class="col-25"><label for="fia">FIA</label></div>
            <div class="col-75"><input type="text" id="fia" name="nfia" value="<?php echo $dados['pac_fia'];?>"></div>
          </div>
          <div class="row">
            <div class="col-25"><label for="cpf">CADSUS</label></div>
            <div class="col-75"><input type="text" id="cadsus" name="ncadsus" value="<?php echo $dados['pac_cadsus'];?>"></div>
          </div>

          <div class="row">
            <div class="col-25"><label for="cpf">CPF</label></div>
            <div class="col-75"><input type="text" id="cpf" name="ncpf" value="<?php echo $dados['pac_cpf'];?>"></div>
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
            <div class="col-25"><label for="cidade">Cidade</label></div>
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
        <div class="col-25"><label for="estado">Estado</label></div>
        <div class="col-75">
          <select id="estado" name="nestado">
            <option selected><?php echo $dados['pac_estado'];?></option>
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
        <div class="col-25"><label for="telefone">Telefone</label></div>
        <div class="col-75"><input type="text" data-mask="(00) 00000-0000" class="form-control" placeholder="Telefone" id="telefone" name="ntelefone" value="<?php echo $dados['pac_telefone'];?>"></div>
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
      <div class="col-25"><label for="ppai">Profissão do conjugue</label></div>
      <div class="col-75"><input type="text" id="pconjugue" name="npconjugue" value="<?php echo $dados['pac_prof_conjugue'];?>">
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="mae">Responsável</label></div>
      <div class="col-75"><input type="text" id="responsavel" name="nresponsavel" value="<?php echo $dados['pac_responsavel'];?>"></div>
    </div>

    <div class="row">
      <div class="col-25"><label for="vresponsavel">Vínculo</label></div>
      <div class="col-75">
        <select id="vresponsavel" name="nvinculoresponsavel">
          <option selected><?php echo $dados['pac_responsavel_vinc'];?></option>
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
      <div class="col-25"><label for="naturalidade">Naturalidade</label></div>
      <div class="col-75"><input type="text" id="naturalidade" name="nnaturalidade" value="<?php echo $dados['pac_naturalidade'];?>"></div>
    </div>

    <div class="row">
      <div class="col-25"><label for="procedencia">Procedência</label></div>
      <div class="col-75"><input type="text" id="procedencia" name="nprocedencia" value="<?php echo $dados['pac_procedencia'];?>"></div>
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
          <option selected><?php echo $dados['pac_agregacao'];?></option>
          <option value="1) Reside Sozinho">1) Reside Sozinho</option>
          <option value="2) Reside com pais e/ou irmãos">2) Reside com pais e/ou irmãos</option>
          <option value="3) Rezide com amigos">3) Rezide com amigos</option>
          <option value="4) Rezide com esposo(a) e/ou filhos">4) Rezide com esposo(a) e/ou filhos</option>
          <option value="5) Sem residência fixa">5) Sem residência fixa</option>
          <option value="6) Sem residência">6) Sem residência</option>
          <option value="7) Instituição">7) Instituição</option>
          <option value="8) Outros">8) Outros</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="escolaridade">Escolaridade</label></div>
      <div class="col-75">
        <select id="escolaridade" name="nescolaridade">
          <option selected><?php echo $dados['pac_escolaridade'];?></option>
          <option value="1) Não alfabetizado">1) Não alfabetizado</option>
          <option value="2) Alfabetizado">2) Alfabetizado</option>
          <option value="3) FIE">3) FIE</option>
          <option value="4) Fundamental incompleto">4) Fundamental incompleto</option>
          <option value="5) Fundamental completo">5) Fundamental completo</option>
          <option value="6) Médio incompleto">6) Médio incompleto</option>
          <option value="7) Médio completo">7) Médio completo</option>
          <option value="8) Superior incompleto">8) Superior incompleto</option>
          <option value="9) Superior completo">9) Superior completo</option>
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
          <option selected><?php echo $dados['pac_pessoas_res'];?></option>
          <option value="1) 01 a 03 pessoas">1) 01 a 03 pessoas</option>
          <option value="2) 04 a 06 pessoas">2) 04 a 06 pessoas</option>
          <option value="3) 07 a 09 pessoas">3) 07 a 09 pessoas</option>
          <option value="4) 10 ou mais pessoas">4) 10 ou mais pessoas</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="pessoasrend">Nº de pessoas na residência que têm rendimentos</label></div>
      <div class="col-75"><input type="number" name="npessoasrend" id="pessoasrend" min="0" max="10" value="<?php echo $dados['pac_pessoas_rend'];?>"></div>
    </div>

    <div class="row">
      <div class="col-25"><label for="casa">Casa</label></div>
      <div class="col-75">
        <select id="casa" name="ncasa">
          <option selected><?php echo $dados['pac_tipo_casa'];?></option>
          <option value="1) Própria">1) Própria</option>
          <option value="2) Cedida">2) Cedida</option>
          <option value="3) Alugada">3) Alugada</option>
          <option value="4) Invasão">4) Invasão</option>
          <option value="5) Instituição">5) Instituição</option>
          <option value="6) Outros">6) Outros</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25"><label for="construcaocasa">Construção da casa</label></div>
      <div class="col-75">
        <select id="contrucaocasa" name="nconstrucaocasa">
          <option selected><?php echo $dados['pac_const_casa'];?></option>
          <option value="1) Alvenaria">1) Alvenaria</option>
          <option value="2) Madeira">2) Madeira</option>
          <option value="3) Taipa">3) Taipa</option>
          <option value="4) Palha">4) Palha</option>
          <option value="5) Palafita">5) Palafita</option>
          <option value="6) Outros">6) Outros</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="esgoto">Esgoto</label></div>
      <div class="col-75">
        <select id="esgoto" name="nesgoto">
          <option selected><?php echo $dados['pac_esgoto'];?></option>
          <option value="1) Tubulação">1) Tubulação</option>
          <option value="2) Fossa biológica">2) Fossa biológica</option>
          <option value="3) Não possui">3) Não possui</option>
          <option value="4) Outros">4) Outros</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="agua">Água</label></div>
      <div class="col-75">
        <select id="agua" name="nagua">
          <option selected><?php echo $dados['pac_agua'];?></option>
          <option value="1) Rede básica">1) Rede básica</option>
          <option value="2) Poço artesiano">2) Poço artesiano</option>
          <option value="3) Cacimba">3) Cacimba</option>
          <option value="4) Outros">4) Outros</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25"><label for="luz">Luz</label></div>
      <div class="col-75">
        <select id="luz" name="nluz">
          <option selected><?php echo $dados['pac_luz'];?></option>
          <option value="1) Elétrica regularizada">1) Elétrica regularizada</option>
          <option value="2) Elétrica não-regularizada">2) Elétrica não-regularizada</option>
          <option value="4) Outros">3) Outros</option>
        </select>
      </div>
    </div>
  </fieldset>

  <fieldset id="dadosprevidenciarios">
    <legend>3. Dados profissionais e previdenciários</legend>
    <div class="row">
      <div class="col-25"><label for="ocupacao">Ocupação atual</label></div>
      <div class="col-75">
        <select id="ocupacao" name="nocupacao">
          <option selected><?php echo $dados['pac_ocupa'];?></option>
          <option value="1) Do lar">1) Do lar</option>
          <option value="2) Estudante">2) Estudante</option>
          <option value="4) Desempregado">3) Desempregado</option>
          <option value="5) Outros">4) Outros</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="localtrabalho">Local de trabalho</label></div>
      <div class="col-75"><input type="text" id="localtrabalho" name="nlocaltrabalho" value="<?php echo $dados['pac_local_trabalho'];?>"></div>
    </div>

    <div class="row">
      <div class="col-25"><label for="relacaotrabalhista">Relação trabalhista</label></div>
      <div class="col-75">
        <select id="relacaotrabalhista" name="nrelacaotrabalhista">
          <option selected><?php echo $dados['pac_relacao_trabalhista'];?></option>
          <option value="1) CLT">1) CLT</option>
          <option value="2) Estatutário">2) Estatutário</option>
          <option value="3) Autônomo">3) Autônomo</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="vinculoprevidenciario">Vínculo previdenciário</label></div>
      <div class="col-75">
        <select id="vinculoprevidenciario" name="nvinculoprevidenciario">
          <option selected><?php echo $dados['pac_vinculo_prev'];?></option>
          <option value="1) Empregado">1) Empregado</option>
          <option value="2) Empregador">2) Empregador</option>
          <option value="3) Autônomo">3) Autônomo</option>
          <option value="4) Aposentado">4) Aposentado</option>
          <option value="5) Pensionista">5) Pensionista</option>
          <option value="6) Dependente">6) Dependente</option>
          <option value="7) Em periodo de graça">7) Em periodo de graça</option>
          <option value="8) Beneficiario (BPC)">8) Beneficiario (BPC)</option>
          <option value="9) NTV">9) NTV</option>
        </select>
      </div>
    </div>

    <div class="row">
      <div class="col-25"><label for="orgaovinculacao">Orgão de vinculação</label></div>
      <div class="col-75">
        <select id="orgaovinculacao" name="norgaovinculacao">
          <option selected><?php echo $dados['pac_orgao_vinc'];?></option>
          <option value="1) INSS">1) INSS</option>
          <option value="2) Amazon PREV">2) Amazon PREV</option>
          <option value="3) Manaus Prev">3) Manaus Prev</option>
          <option value="4) Outros">4) Outros</option>
        </select>
      </div>
    </div>
  </fieldset>
  <<?php endforeach; ?>
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
