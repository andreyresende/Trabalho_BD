<?php
$con = mysqli_connect("127.0.0.1", "root", "", "mydb");
$db  = mysqli_select_db($con, 'mybd');

if (!empty($_POST['identificador_ajax'])) {

	$identificador = $_POST['identificador_ajax'];
	$sql="
		DELETE 
		FROM mydb.escoteiro_has_doencacronica
		WHERE escoteiro_has_doencacronica.doencaCronica_id = $identificador;
	";
	$resultado = mysqli_query($con,$sql);
	$sql="
		DELETE 
		FROM mydb.doencacronica
		WHERE doencacronica.id = $identificador;
	";
	$resultado = mysqli_query($con,$sql);
	if(resultado)
		echo "1";
	else
		echo "0";
}
?>