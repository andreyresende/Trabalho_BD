<?php
include "Pagina_cadastro_escoteiro_control.php";

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Página de cadastro de escoteiros</title>
		<meta charset="utf-8"/>
		
	</head>
	<body>
		<form id="form1" name="form1" method="post">	
			<label>CPF: </label>
			<input type = "text" name = "CPF" size = "11" id="CPF">
			<button onclick = "validar();">Enviar</button>
		</form>
		<script type="text/javascript">
			function validar(){
				if (form1.CPF.value == "") {
					alert("CPF não pode ser nulo");
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