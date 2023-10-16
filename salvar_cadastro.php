<?php
require_once 'Pessoa.php'; // Inclua o arquivo da classe Pessoa

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];

    $pessoa = new Pessoa();
    $pessoa->setNome($nome);
    $pessoa->setCpf($cpf);

    $pessoa->Gravar();
}
?>
