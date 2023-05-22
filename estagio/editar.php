
<?php

require_once "conexao.php";

$id = $_GET["id"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $logradouro=$_POST["logradouro"];
    $numero=$_POST["numero"];
    $complento=$_POST["complento"];
    $bairro=$_POST["bairro"];
    $cidade=$_POST["cidade"];
    $cpf = $_POST["cpf"];
    $datadenasci = $_POST["datadenasci"];
    $sexo = $_POST["sexo"];
    $senha = $_POST["senha"];

$sql = "UPDATE clientes SET nome='$nome',logradouro='$logradouro',numero='$numero',complento='$complento',bairro='$bairro',cidade='$cidade',
cpf='$cpf',datadenasci='$datadenasci',sexo='$sexo',senha='$senha'where idclientes='$id'";
//echo $sql;// imprime 
//die();// mata
//echo $id;
/*
if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['email']))

isset() - existe;
empty() - vazio;
!empty() - não vazio;
*/

if($conexao -> query($sql) === TRUE){
    echo "Registro atualizado com sucesso!";
    header('Location: listar.php');
    //exit;
} else {
echo "Erro ao atualizar registro: " . $conexao->error;
}
};

$sql = "SELECT * FROM clientes where idclientes ='$id'";

$resultado = $conexao -> query($sql); 

if(mysqli_num_rows($resultado) > 0){
    $row = $resultado->fetch_assoc();
    $nome = $row["nome"];
    $logradouro = $row["logradouro"];
    $numero = $row["numero"];
    $complento = $row["complento"];
    $bairro = $row["bairro"];
    $cidade = $row["cidade"];
    $cpf = $row["cpf"];
    $datadenasci = $row["datadenasci"];
    $sexo = $row["sexo"];
    $senha = $row["senha"];
} else {
    echo "Registro não encontrado.";
  }

?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"] . "?id=".$id; ?>">
Nome: <input type="text" name="nome" value="<?php echo $nome;?>"><br>
logradouro: <input type="logradouro" name="logradouro"value="<?php echo $logradouro;?>"><br>
Numero: <input type="numero" name="numero"value="<?php echo $numero;?>"><br>
Complento: <input type="complento" name="complento"value="<?php echo $complento;?>"><br>
Bairro: <input type="bairro" name="bairro"value="<?php echo $bairro;?>"><br>
Cidade: <input type="cidade" name="cidade"value="<?php echo $cidade;?>"><br>
Cpf: <input type="text" name="cpf"value="<?php echo $cpf;?>"><br>
Data de Nascimento: <input type="datadenasci" name="datadenasci"value="<?php echo $datadenasci;?>"><br>
Sexo: <input type="text" name="sexo"value="<?php echo $sexo;?>"><br>
senha: <input type="senha" name="senha" placeholder="Senha (deve conter letras e números)"
 pattern="(?=.*[a-z])(?=.*[0-9]).*$" minlength="4" maxlength="6" required>><br>
<input type="submit" value="Cadastro">;
</form>

</body>
</html>
