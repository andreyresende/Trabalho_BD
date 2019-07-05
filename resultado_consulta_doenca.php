<?php 
$cpf = (isset($_GET["cpf"]) ? $_GET["cpf"] : NULL);

$con = mysqli_connect("127.0.0.1", "root", "", "mydb");
$db = mysqli_select_db($con,'mybd');

$sql="
			SELECT pe.nome as nome_pessoa ,dc.nome as nome_doenca
			FROM mydb.doencacronica dc
			JOIN mydb.escoteiro_has_doencacronica edc ON edc.doencaCronica_id = dc.id
			JOIN mydb.pessoa pe ON pe.cpf = edc.escoteiro_pessoa_cpf
			WHERE edc.escoteiro_pessoa_cpf = $cpf
	";
	$resultado = mysqli_query($con,$sql);


?>
<html>
	<head>
		<title>Página de resultado</title>
		<meta charset="utf-8"/>
		
	</head>
	<body>
		<?php
		echo "<table border=1>
			<tr>
				<th>Nome pessoa</th>

				<th>Nome doença</th>

				<th>Alterar</th>

				<th>Deletar</th>
			</tr>";
		while($row = mysqli_fetch_assoc($resultado)){
			echo "<tr>
					<td>".$row['nome_pessoa']."</td>
					<td>".$row['nome_doenca']."</td>
					<td><a href='alterar_dados.php?cpf=$cpf' class='btn btn-info' role='button'>Alterar</a></td>
					<td><a href='#' class='btn btn-info' role='button'>Deletar</a></td>";

		    echo "</tr>"; 	 
		}
			echo "</table>";


		?>
		
	</body>
</html>