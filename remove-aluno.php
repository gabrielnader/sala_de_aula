<?php 
include("cabecalho.php"); 
include("conecta.php");

$id=$_POST['id'];

$query = "delete from aluno where ID_ALUNO = $id";

if(mysqli_query($conexao, $query)){
		header("Location: index.php");
		die();
	}else{
		echo "<p class='text-danger'>O aluno $id não foi removido</p>";
	}