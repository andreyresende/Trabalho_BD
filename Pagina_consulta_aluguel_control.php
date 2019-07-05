<?php
$con = mysqli_connect("127.0.0.1", "root", "", "mydb");
$db  = mysqli_select_db($con, 'mybd');

if (!empty($_POST['cpf_ajax'])) {

	$cpf = $_POST['cpf_ajax'];

	$sql="
			SELECT alugel.equi as ID_equipamento ,alugel.pego as Alugado, alugel.devolucao as Data_devolucao
			FROM mydb.alugel 
	";
	$resultado = mysqli_query($con,$sql);

	$rowcount = mysqli_num_rows($resultado);

	if($rowcount > 0){
		echo "1";
	}
	else{
		echo "0";
	}
}
?>