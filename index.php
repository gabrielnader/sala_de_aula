<?php include("cabecalho.php"); 
include("conecta.php");?>

<h1 style="border-bottom: 1px solid rgba(0, 0, 0, .8);">Sala de Aula</h1>
<br>
<h2>Lista de alunos</h2>

<?php
	$resultado = mysqli_query($conexao, 'select * from aluno');
	$aluno = mysqli_fetch_all($resultado);
?>
<table class="table table-striped table-bordered">
	<tr>
    	<th>Nome</th>
    	<th style="text-align: center;">Data de Nascimento</th>
        <th style="text-align: center;">Ações</th>
    </tr>
    	<?php 
    	foreach ($aluno as $valor){
    		echo "<tr>";
    		echo "<td>".$valor[1]."</td>";
            $dataFormatada = date('d-m-Y', strtotime($valor[2]));
    		echo "<td>".$dataFormatada."</td>";
                echo "<td style='text-align: center;'>";
                    echo "<form action='acao-aluno.php' method='POST'>";
                        echo "<input type='hidden' value='$valor[0]' name='id'>";
                        echo "<input type='submit' value='Detalhes' class='btn btn-primary' name='acao' style='margin-right: 20px;'>";
                        echo "<input type='submit' value='Editar' class='btn btn-primary' name='acao'>";
                    echo "</form>";
                echo "</td>";
    		echo "</tr>";
    	}
    	?>
    
</table>

<?php include("rodape.php"); ?>