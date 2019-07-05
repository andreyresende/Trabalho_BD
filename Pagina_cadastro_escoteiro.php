<?php
include "Pagina_cadastro_escoteiro_control.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Página de cadastro de escoteiros</title>
		<meta charset = "utf-8"/>	
	</head>
	<body>
		<form id = "form1" method = "post">

			<label>Nome</label>
			<br>
				<input type = "text" name = "nome" 		size = "11">
			<br>

			<label>CPF</label>
			<br>
				<input type = "text" name = "cpf" 		size = "11">
			<br>

			<label>Data de Nascimento(YYYY-MM-DD)</label>
			<br>
				<input type = "text" name = "data_nasc" size = "11">
			<br>

			<label>Email</label>
			<br>
				<input type = "text" name = "email" size = "11">
			<br>

			<label>Endereço</label>
			<br>
				<input type = "text" name = "endereco" size = "11">
			<br>

			<label>CEP</label>
			<br>
				<input type = "text" name = "cep" size = "11">
			<br>

			<button onclick = "validar();">Enviar</button>
		</form>
		<script type="text/javascript">
			function validar(){
				if 		(form1.nome.value == ""){
					alert("Nome não pode ser nulo");
					return false;
				}
				else if (form1.cpf.value == "") {
					alert("CPF não pode ser nulo");
					return false;
				}
				else if (form1.data_nasc.value == ""){
					alert("Data de nascimento não pode ser nula");
					return false;
				}
				else if (form1.endereco.value == ""){
					alert("Endereço não pode ser nulo");
					return false;
				}
				else if (form1.cep.value == ""){
					alert("CEP não pode ser nulo");
					return false;
				}
				else{
					enviar();
				}	
			}
			function enviar(){
				confirmacao = 'Atenção! \n\n' + 'Deseja enviar?';
				if (window.confirm(confirmacao)){
					document.getElementById('form1').action = "Pagina_cadastro_escoteiro_control.php?acao=novo_cadastro";
					document.getElementById('form1').submit();					
				}	
			}
		</script>
	</body>
</html>