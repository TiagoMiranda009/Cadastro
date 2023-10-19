<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cadastros";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar a conexão
if ($conn->connect_error) {
    die("Conexão com o banco de dados falhou: " . $conn->connect_error);
}
?>
