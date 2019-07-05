<?php 
$con = mysqli_connect("127.0.0.1", "root", "", "mydb");
$db  = mysqli_select_db($con,'mybd');
$sql="
		SELECT alugel.equi as ID_equipamento ,alugel.pego as Alugado, alugel.devolucao as Data_devolucao
		FROM mydb.alugel
";
	$resultado = mysqli_query($con, $sql);
?>
<html>
	<head>
		<title>Página de resultado</title>
		<meta charset="utf-8"/>
	</head>
	<body>
		<?php
		echo "<table border=1 style='border-collapse: collapse'>
			<tr>
				<th style='padding: 10px'>ID</th>

				<th style='padding: 10px'>Alugado</th>

				<th style='padding: 10px'>Data de devolução</th>
			</tr>";
		while($row = mysqli_fetch_assoc($resultado)){
			echo "<tr>
					<td style='padding: 10px'>".$row['ID_equipamento']."</td>
					<td style='padding: 10px'>".$row['Alugado']."</td>
					<td style='padding: 10px'>".$row['Data_devolucao']."</td>
					";
		    echo "</tr>"; 	 
		}
			echo "</table>";
		?>
		<script type="text/javascript">
			function apagar(){
				confirmacao = 'Atenção! \n\n' + 'Deseja desvincular essa doença do seu perfil?';
				if(window.confirm(confirmacao)){
					
				}
			}
		</script>
	</body>
</html>