<!DOCTYPE html>
<html>
	<head>
		<title>Página de consulta de alugueis</title>
		<meta charset="utf-8"/>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	</head>
	<body onload="getAluguel();">	
		<script type="text/javascript">
			function getAluguel(){
				$.ajax({
				type: "POST",
				url: "Pagina_consulta_aluguel_control.php",				
				data: "", 

				success: function(data) {
					if(data == 1){
						 window.location = "resultado_consulta_aluguel.php";
					}
					else{
						alert("O sistema não possui aluguéis no momento");
						window.location = 'Pagina_principal.php';
					}
				}
				});
			}	
		</script>
	</body>
</html>