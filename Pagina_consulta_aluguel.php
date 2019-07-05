<!DOCTYPE html>
<html>
	<head>
		<title>Página de consulta de alugueis</title>
		<meta charset="utf-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body>
		<form name="form1" method="post">
			<button hidden="hidden" onload = "getAluguel();">Enviar</button>
		</form>		
		<script type="text/javascript">
			function getAluguel(){
				$.ajax({
				type: "POST",
				url: "Pagina_consulta_aluguel_control.php",				
				data: "", 

				success: function(data) {
					if(data == 1){
						 window.location = "Pagina_consulta_aluguel_control.php";
					}
					else{
						alert("O sistema não possui aluguéis no momento");
					}
				}
				});
			}	
		</script>
	</body>
</html>