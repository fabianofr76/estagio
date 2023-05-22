
<div class="row">
    <div class="col col-3">
     <h1> Sistema de Cadastro:</h1>
     <a class ='btn btn-primary' 
     href='cadastro.php'>Novo Registro</a>
    </div>
    <div class="col col-9">

<?php

require_once('conexao.php');
include "header.php";

$sql = "SELECT * FROM cadastro";

$resultado = $conexao->query($sql);

//var_dump($resultado);

if(mysqli_num_rows($resultado)>0){
echo "<table class='table'>
<tr>
<th>id</th>
<th>nome</th>
<th>logradouro</th>
<th>numero</th>
<th>complento</th>
<th>bairro</th>
<th>cidade</th>
<th>cpf</th>
<th>datadenasci</th>
<th>sexo</th>
<th>senha</th>
<th>Ações</th>
</tr>";


while($row = mysqli_fetch_assoc($resultado)){
     echo "<tr>";
     echo "<td>".$row['id']."</td>";
     echo "<td>".$row['nome']."</td>";
     echo "<td>".$row['logradouro']."</td>";
     echo "<td>".$row['numero']."</td>";
     echo "<td>".$row['complento']."</td>";
     echo "<td>".$row['bairro']."</td>";
     echo "<td>".$row['cidade']."</td>";
     echo "<td>".$row['cpf']."</td>";
     echo "<td>".$row['datadenasci']."</td>";
     echo "<td>".$row['sexo']."</td>";
     echo "<td>".$row['senha']."</td>";
     echo"<td>";
     echo "<a class = 'btn btn-primary' href='editar.php?id="
     .$row['id']."'>Editar</a>";
     echo "   ";
     echo "<a class='btn btn-danger' href='excluir.php?id="
     .$row['id']."'>Excluir</a>";
     echo "</td>";
     echo "</tr>";
}

echo "</table>";
}else{
    echo "nenhum registro encontrado";
}

?>

    </div>
  </div>
</body>
</html>