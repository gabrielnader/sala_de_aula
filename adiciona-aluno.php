<?php include("cabecalho.php"); 
include("conecta.php");?>

<?php
$nome = $_POST["nome"];
$dataFormatada = date('Y-m-d', strtotime($_POST["bday"]));

$query = "insert into aluno (NOME_ALUNO, DATE_ALUNO) values ('$nome', '$dataFormatada')";

if(mysqli_query($conexao, $query)){
	?>
	<p class="text-success">O aluno <?php echo $nome ?>, com data de nascimento <?php echo $dataFormatada ?> foi adicionado com sucesso!</p>
<?php
	header("Location: form-aluno.php");
	die();
}else{
	?>
	<p class="text-danger">O aluno <? = $nome; ?> não foi adicionado</p>
<?php
}
?>

<?php
 include("rodape.php");
 ?>