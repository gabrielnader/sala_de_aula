<?php include("cabecalho.php"); 
include("conecta.php");?>

<?php
$titulo=$_POST['titulo'];
$id=$_POST['id'];
$notes=$_POST['anotacoes'];

$query = "insert into notes (NOME_NOTE, NOTES, ID_ALUNO) values ('$titulo', '$notes', '$id')";


if(mysqli_query($conexao, $query)){
	header("Location: read.php?id=$id");
	die();
}else{
	?>
	<p class="text-danger">A anotação <?php echo $titulo ?> não foi adicionado</p>
<?php
}

 include("rodape.php");
  ?>