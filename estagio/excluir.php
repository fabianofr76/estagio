<?php
// Inclui arquivo de conexão
require_once 'conexao.php';

// Verifica se foi enviado um id para exclusão
if(isset($_GET['id'])){
    // Escapa caracteres especiais e evita injeção de SQL
    $id = mysqli_real_escape_string($conexao, $_GET['id']);
    
    // Monta a query SQL de deletar
    $sql = "DELETE FROM cadastro WHERE id = $id";
    
    // Executa a query SQL
    if(mysqli_query($conexao, $sql)){
        // Redireciona para a página de listagem de registros
        header('Location: listar.php');
        exit;
    }else{
        echo "Erro ao excluir registro: " . mysqli_error($conexao);
    }
}else{
    echo "ID não fornecido para exclusão.";
}
?>
