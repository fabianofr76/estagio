<form method="post" action="<?php
echo $_SERVER["PHP_SELF"];?>">
Nome: <input type="nome" name="nome"><br>
logradouro: <input type="logradouro" name="logradouro"><br>
Numero: <input type="numero" name="numero"><br>
Complemento: <input type="complemento" name="complemento"><br>
Bairro: <input type="bairro" name="bairro"><br>
Cidade: <input type="cidade" name="cidade"><br>
Cpf: <input type="cpf" name="cpf"><br>
Data de Nascimento: <input type="datadenasci" name="datadenasci"><br>
Sexo: <input type="sexo" name="sexo"><br>
Senha: <input type="password" name="senha"  id="senha" placeholder="Senha (deve conter letras e números)"
 pattern="(?=.*[a-z])(?=.*[0-9]).*$" minlength="4" maxlength="6" required>><br>

 <input class="btn btn-primary" type="submit" value="Cadastro">

 <input class="bt btn-secund" type="button" value="LOGIN" onclick="redirecionar()">

<script>
   function redirecionar() {
      window.location = "http://localhost/estagio/login.php";
   }
</script>

<?php

include "conexao.php";//não encontra o arquivo -segue em frente
//ou 
// require "conexao.php" //não encontra -> erro fatal
// include_once uma unica vez ignora erros
//require_once uma unica vez n ignora erros

//print_r($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$nome = $_POST['nome'];
$logradouro = $_POST['logradouro'];
$numero = $_POST['numero'];
$complemento = $_POST['complemento'];
$bairro = $_POST['bairro'];
$cidade = $_POST['cidade'];
$cpf = $_POST['cpf'];
$datadenasci = $_POST['datadenasci'];
$sexo = $_POST['sexo'];
$senha = $_POST['senha'];

$sql = "INSERT INTO cadastro(nome, logradouro,numero,complemento,bairro,cidade, cpf,
 datadenasci,sexo,senha) VALUES ('$nome','$logradouro','$numero','$complemento','$bairro','$cidade', '$cpf',
  '$datadenasci','$sexo','$senha')";

if ($conexao->query($sql) === TRUE) {
    echo "Registro inserido com sucesso!";
  } else {
    echo "Erro ao inserir registro: " . $conexao->error;
  }
}
?>
