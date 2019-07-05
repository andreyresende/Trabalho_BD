<?php
include "Pagina_inserir_tipo_control.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Página de inserir tipos de equipamento</title>
	<meta charset="utf-8"/>
</head>
<body>
	<form id="form1" method="post">
		<label>Tipo</label>
		<br>
		<input type="text" name="tipo" size="11">
		<br>
		<label>Descrição</label>
		<br>
		<input type="text" name="desc" size="11">
		<br>
		<button onclick="validar();">Inserir</button>
	</form>
	<script type="text/javascript">
		function validar() {
			if(form1.tipo.value == ""){
				alert("Tipo não pode ser nulo");
				return false;
			}
			else if(form1.desc.value == ""){
				alert("Descrição não pode ser nula");
				return false;
			}
			else{
				inserir();
			}
		}
		function inserir() {
			confirmacao = 'Atenção! \n\n' + 'Deseja inserir?';
			if (window.confirm(confirmacao)){
				document.getElementById('form1').action = "Pagina_inserir_tipo_control.php?acao=inserir";
				document.getElementById('form1').submit();
			}
		}
	</script>
</body>
</html>