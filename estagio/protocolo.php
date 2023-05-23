<form method="post" action="<?php
echo $_SERVER["PHP_SELF"];?>">

Id: <input type="id" name="id"><br>
Numero: <input type="numero" name="numero"><br>
Descricao: <input type="descricao" name="descricao"><br>
Data: <input type="dat" name="dat"><br>
Prazo: <input type="prazo" name="prazo"><br>
Id_demandante: <input type="id_demandante" name="id_demandante"><br>

<input class="btn btn-primary" type="submit" value="protocolo">

 <?php
 
 include "conexao.php";//não encontra o arquivo -segue em frente
 //ou 
 // require "conexao.php" //não encontra -> erro fatal
 // include_once uma unica vez ignora erros
 //require_once uma unica vez n ignora erros
 
 //print_r($_POST);
 if ($_SERVER["REQUEST_METHOD"] == "POST") {

 $id = $_POST['id'];
 $numero = $_POST['numero'];
 $descricao = $_POST['descricao'];
 $dat = $_POST['dat'];
 $prazo = $_POST['prazo'];
 $id_demandante = $_POST['id_demandante'];
 
 $sql = "INSERT INTO protocolo(id,numero,descricao,data,prazo,id_demandante) 
 VALUES('$id','$numero','$descricao','$dat','$prazo', '$id_demandante')";
 
 if ($conexao->query($sql) === TRUE) {
     echo "Registro inserido com sucesso!";
   } else {
     echo "Erro ao inserir registro: " . $conexao->error;
   }
 }
 ?>