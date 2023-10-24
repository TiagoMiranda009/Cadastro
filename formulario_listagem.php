<!DOCTYPE html>
<html>
<head>
    <title>Listagem de Pessoas</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Listagem de Pessoas</h2>

<?php
require_once 'Pessoa.php'; // Inclua o arquivo da classe Pessoa
require_once 'conexaobd.php'; // Inclua o arquivo de configuração do banco de dados
require_once 'config.php'; // Inclua o arquivo de configuração do banco de dados

// Conectar ao banco de dados
$database = new Database();
$db = $database->getConnection();

$pessoa = new Pessoa($db);

// Obter a lista de pessoas do banco de dados
$pessoas = $pessoa->listarPessoas();

if (count($pessoas) > 0) {
    echo '<table border="1">';
    echo '<tr><th>ID</th><th>Nome</th><th>CPF</th></tr>';

    foreach ($pessoas as $p) {
        echo '<tr>';
        echo '<td>' . $p['id'] . '</td>';
        echo '<td>' . $p['nome'] . '</td>';
        echo '<td>' . $p['cpf'] . '</td>';
        echo '</tr>';
    }

    echo '</table>';
} else {
    echo '<p>Nenhuma pessoa encontrada.</p>';
}
?>

</body>
</html>
