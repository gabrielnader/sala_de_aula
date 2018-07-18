<?php include("cabecalho.php"); 
include("conecta.php");?>

<?php

	$nome = $_POST['nome'];
	$bday = $_POST['bday'];
	$id = $_POST['id'];

	$query = "update aluno set NOME_ALUNO = '$nome', DATE_ALUNO = '$bday' where ID_ALUNO=$id";

	if(mysqli_query($conexao, $query)){
		header("Location: index.php");
		die();
	}else{
		?>
		<p class="text-danger">O aluno não foi editado</p>
	<?php
	}
include("rodape.php"); ?>