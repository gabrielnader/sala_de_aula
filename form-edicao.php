<?php include("cabecalho.php");
include("conecta.php");

	$id =$_GET['id'];

	$resultado = mysqli_query($conexao, "select * from aluno where ID_ALUNO = '".$id."'");
	$aluno = mysqli_fetch_array($resultado);
	?>
	<h2>Editar</h2>
	<form action="edicao.php" method="POST">
		<?php 
		echo "<input type='hidden' value='$aluno[0]' name='id'>";
		echo "Nome:<input type='text' name='nome' class='form-control' value='$aluno[1]'>";
		echo "Data de Nascimento:<input type='date' name='bday' class='form-control' value='$aluno[2]'>";
		echo "<br>";
		echo "<input type='submit' value='Enviar' class='btn btn-primary' name='enviar'>";
		?>
	</form>

<?php include("rodape.php"); ?>