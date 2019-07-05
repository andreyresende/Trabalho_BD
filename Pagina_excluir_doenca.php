<!DOCTYPE html>
<html>
	<head>
		<title>Página para exclusão de doenças</title>
		<meta charset="utf-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body>
		<form name="form1" method="post">
			<label>ID</label>
			<br>
				<input type = "text" name = "identificador" size = "11">
			<br>
			<button onclick = "excluir(document.form1.identificador.value);">Enviar</button>
		</form>		
		<script type="text/javascript">
			function excluir(identificador){
				$.ajax({
				type: "POST",
				url: "Pagina_excluir_doenca_control.php",				
				data: "identificador_ajax="+identificador, 
				
				success: function(data) {
					if(data == 1){
						alert("Doença excluída com sucesso");
						window.location = 'Pagina_principal.php'
					}
					else{
						alert("Esse ID não corresponde a nenhuma doença cadastrada no sistema");
						window.location = 'Pagina_principal.php'
					}
				}
				});
			}	
		</script>
	</body>
</html>