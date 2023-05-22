<?php

$servidor="localhost:3308";
$usuario="root";
$senha="";
$banco="dbcad";

$conexao = new mysqli($servidor, $usuario, $senha, $banco);


if($conexao->connect_error){
  die("conexão falhou" . $conexao->connect_error);
}else{
  echo "funcionou";
}




?>