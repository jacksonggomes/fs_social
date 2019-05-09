<!--script-->
<script>
      $("#telefone").mask("(00) 0000-0000");
      $("#celular").mask("(00) 00000-0000");
</script>
<!--habilita/desabilita inputs-->
<script>
function verifica(value){
	var input = document.getElementById("localtrabalho");
	var input1 = document.getElementById("profissao");
  if(value == "Outros"){
    input.disabled = false;
    input1.disabled = false;
  }else{
    input.disabled = true;
    input1.disabled = true;
  }
};
</script>
<script>
function verificaMov(value){
	var input = document.getElementById("movimentacao");
  if(value == "Internado"){
    input.disabled = true;
  }else{
    input.disabled = false;
  }
};
</script>

<script>
	//Verifica se CPF é válido
	function TestaCPF(strCPF) {
		if (strCPF !=""){
			var Soma, Resto, borda_original;
			Soma = 0;
			
			if (strCPF == "00000000000"){
				document.getElementById("cpf").setCustomValidity('CPF Invalido!');
				return false;
			}
			
			for (i=1; i<=9; i++){
				Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (11 - i);
			}
			
			Resto = (Soma * 10) % 11;
			if ((Resto == 10) || (Resto == 11)){
				Resto = 0;
			}
			
			if (Resto != parseInt(strCPF.substring(9, 10))){
				document.getElementById("cpf").setCustomValidity('CPF Invalido!');
				return false;
			}
			
			Soma = 0;
			for (i = 1; i <= 10; i++){
				Soma = Soma + parseInt(strCPF.substring(i-1, i)) * (12 - i);
			}
			
			Resto = (Soma * 10) % 11;
			if ((Resto == 10) || (Resto == 11)){
				Resto = 0;
			}
			
			if (Resto != parseInt(strCPF.substring(10, 11))){
				document.getElementById("cpf").setCustomValidity('CPF Invalido!');
				return false;
			}
			
			document.getElementById("cpf").setCustomValidity('');
			return true;
		}
	}
</script>
