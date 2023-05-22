<!DOCTYPE html>
<html>
    <header>
        <meta charset="utf-8">
        <meta name="viewport" content="
        width=device-width,
        initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Meu Formulario</title>

        <style type="text/css">

fieldset{
    color:white ;
    background-color: blue;
    border: 5px solid black;
    width: 50%;
    margin: auto auto;
}
</style>

<body>
<h3> .</h3>
<h3> .</h3>
<h3> .</h3>

    <fieldset>
    
    <h1><center>LOGIN</center></h1>
    <form method="POST">

    <div class="input-group mb-3">
  <span class="input-group-text">Nome de usuario :</span>
  <input type="text" class="form-control" placeholder="Usuario" 
  aria-label="nome" name= "usuario">
</div>
<div class="input-group mb-3">
  <span class="input-group-text">Senha:</span>
  <input type="password" class="form-control" 
  placeholder="Digite sua senha !!!" aria-label="Senha" 
  name= "senha">
  </div>
  <br>
  <center>
        <input class="btn btn-info" type="submit" value="LOGIN">
        <a href="http://localhost/estagio/cadastro.php" class="btn btn-primary">Cadastro</a>
       <input class="btn btn-danger" type="reset" value="Limpar">
  </center> 
  <h1> </h1>      
    </form>

</fieldset>
</body>
</html>

<?php
// Configurações do banco de dados
$hostname = "localhost:3308";
$username = "root";
$password = "";
$database = "dbcad";

// Conecta ao banco de dados
$mysqli = new mysqli($hostname, $username, $password, $database);

// Verifica se houve erro na conexão
if ($mysqli->connect_errno) {
    die("Falha na conexão com o banco de dados: " . $mysqli->connect_error);
}

// Verifica se o formulário de login foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém o nome de usuário e a senha do formulário
    $username = $_POST["usuario"];
    $password = $_POST["senha"];

    // Escapa os caracteres especiais para evitar SQL injection
    $username = $mysqli->real_escape_string($username);
    $password = $mysqli->real_escape_string($password);

    // Consulta o banco de dados para verificar o nome de usuário e a senha
    $query = "SELECT * FROM cadastro WHERE nome='$username' AND senha='$password'";
    $result = $mysqli->query($query);

    // Verifica se a consulta retornou algum resultado
    if ($result->num_rows == 1) {
        // O nome de usuário e a senha estão corretos
        echo "Login realizado com sucesso!";
        echo " ";
        echo " ";
        header("Location: http://localhost/estagio/formulario.php");
      
      } else {
        // O nome de usuário ou a senha estão incorretos
        echo "Nome de usuário ou senha incorretos.";
    }
}
?>
