<?php
$acao = (isset($_GET["acao"]) ? $_GET["acao"] : NULL);
$cpf = (isset($_GET["cpf"]) ? $_GET["cpf"] : NULL);
$nome = (isset($_POST["nome"]) ? $_POST["nome"] : NULL);
$con = mysqli_connect("127.0.0.1", "root", "", "mydb");

if(!$con){
	die('Erro na conexão');
}

switch($acao){
	case 'novo_cadastro':
		$sql = "INSERT INTO `mydb`.`pessoa` (`cpf`, `nome`, `data_nasc`, `email`, `endereco_idendereco`)
				VALUES
				('$cpf', 'Andrey', '2000-04-15', 'andreyunb@hotmail.com', 'Samambaia Sul QR 987 CONJ 66 CASA 113')";
		$resultado = mysqli_query($con,$sql);		
		if(!isset($resultado)){
			echo "Erro no cadastro";
		}
		else{
			echo "<script>alert('Cadastrado com sucesso!');
						  window.location = 'Pagina_principal.php' </script>";
		}
	break;

	case 'alterar_cadastro':
		$sql = "UPDATE `mydb`.`pessoa` SET nome = '$nome'
				WHERE cpf = '$cpf'";
		$resultado = mysqli_query($con,$sql);	
		if(!isset($resultado)){
			echo "Erro na alteração";
		}
		else{
			echo "<script>alert('Alterado com sucesso!');
						  window.location = 'Pagina_principal.php' </script>";
		}		
	break;
}



































?>