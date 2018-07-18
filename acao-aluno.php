<?php 
include("cabecalho.php");
include("conecta.php");

$id = $_POST["id"];
$acao = $_POST["acao"];

if ($acao == "Detalhes"){
	header("Location: read.php?id=$id");
	die();
}else{
	header("Location: form-edicao.php?id=$id");
	die();
}

include("rodape.php"); ?>