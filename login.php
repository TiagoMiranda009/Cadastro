<?php

require_once 'conexaobd.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST['nome'];
    $cpf = $_POST['cpf'];

    $sql = "SELECT * FROM pessoas WHERE nome='$nome' AND cpf='$cpf'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Iniciar a sessão se as credenciais estiverem corretas
        session_start();
        $_SESSION['nome'] = $nome;
        header('Location: formulario_cadastro.php'); // Redirecionar para a página de dashboard após o login bem-sucedido
    } else {
        echo "Credenciais inválidas, aperte VOLTAR TROUXA"; // Mensagem de erro para credenciais incorretas
        // return (header('Location: index.php'));
    }
}