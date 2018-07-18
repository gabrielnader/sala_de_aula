<?php include("cabecalho.php"); ?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-aluno.php" method="POST">
	Nome:<input type="text" name="nome" class="form-control"><br>
	Data de nascimento:<input type="date" name="bday" class="form-control"><br>
	<input type="submit" value="Cadastrar" class="btn btn-primary">
</form>

<?php include("rodape.php"); ?>