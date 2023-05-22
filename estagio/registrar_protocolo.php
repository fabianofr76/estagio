<?php
// Obter os dados do formulário
$numero = $_POST['numero'];
$descricao = $_POST['descricao'];
$data = date('Y-m-d'); // Data atual
$prazo = $_POST['prazo'];
$id_demandante = $_POST['id_demandante'];

// Conexão com o banco de dados
$con = mysqli_connect("localhost:3308", "root", "", "dbcad");

// Inserir os dados do protocolo na tabela
$query = "INSERT INTO protocolo(numero, descricao,data, prazo,id_demandante) VALUES ('$numero','$descricao','$data','$prazo','$id_demandante')";
mysqli_query($con, $query);

// Fechar a conexão com o banco de dados
mysqli_close($con);

// Redirecionar para uma página de sucesso ou exibir uma mensagem de sucesso
echo "Protocolo registrado com sucesso!";
?>