<?php 
include("cabecalho.php"); 
include("conecta.php");

$id =$_GET['id'];

    $resultado = mysqli_query($conexao, "select * from aluno where ID_ALUNO = '".$id."'");
    $aluno = mysqli_fetch_array($resultado);
    ?>
    <h2>Dados</h2>
    <table class="table table-striped table-bordered">
        <tr>
            <th>Nome</th>
            <th>Data de Nascimento</th>
            <th>Remover</th>
        </tr>
        <tr><?php
            echo "<td>";
                echo "$aluno[1]"; 
            echo "</td>";
            echo "<td>";
                echo "$aluno[2]";
            echo "</td>";
            echo "<td>";
                echo "<form action='remove-aluno.php' method='POST' style='text-align: center;>";
                    echo "<input type='hidden' value='$id' name='id''>";
                    echo "<input type='submit' value='Remover' class='btn btn-danger' name='remover' '>";
                echo "</form>";
            echo "</td>";
            ?>
        </tr>
    </table>
    <br>
    <?php

    $resultado = mysqli_query($conexao, "select * from notes where ID_ALUNO = '".$id."'");
    $note = mysqli_fetch_all($resultado);

    ?>
    <h2>Anotações</h2>
    <table class="table table-striped table-bordered">
        <?php
        foreach ($note as $valor){
            echo "<tr>";
                echo "<th>".$valor[3]."</th>";
                echo "<td>".$valor[2]."</td>";
                $dataFormatada = date('d-m-Y', strtotime($valor[4]));
                echo "<td>".$dataFormatada."</td>";
            echo "</tr>";
        } ?>
    </table>
    
    <br>

    <form action="adiciona-note.php" method="POST">
        <input type="hidden" name="id" value=<?php echo '"'.$id.'"';?>>
        <label for="titulo">Título</label>
        <input type="text" name="titulo" placeholder="Coloque o título" class="form-control">
        <br>
        <label for="anotacoes">Anotações</label>
        <textarea class="form-control" rows="5" name="anotacoes"></textarea>
        <br>
        <input type='submit' value='Salvar' class='btn btn-primary' name='salvar'>
    </form>

<?php include("rodape.php"); ?>