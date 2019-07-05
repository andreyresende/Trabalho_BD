<?php
$con   	   = mysqli_connect("127.0.0.1", "root", "", "mydb");
$acao 	   = (isset($_GET["acao"]) ? $_GET["acao"] : NULL);
$tipo	   = (isset($_POST["tipo"]) ? $_POST["tipo"] : NULL);
$desc	   = (isset($_POST["desc"]) ? $_POST["desc"] : NULL);




if(!$con){
	die('Erro na conexão');
}

switch($acao){
	case 'inserir':
	$sql = "INSERT INTO
	 		mydb.tipoeq (nome, descricao)
	 		VALUES
	 		('$tipo', '$desc')";
	$resultado = mysqli_query($con, $sql);
	if(!isset($resultado)){
			echo "Erro no cadastro de tipo";
	}
	else{
			echo "<script>alert('Inserido com sucesso!');
						  window.location = 'Pagina_principal.php' </script>";
	}
	break;
}
?>

