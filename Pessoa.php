<?php

require_once 'conexaobd.php';

class Pessoa {
    private $nome;
    private $cpf;
    public $id;
    private $conn;
    private $table_name = "pessoas";

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setCpf($cpf) {
        $this->cpf = $cpf;
    }

    public function getCpf() {
        return $this->cpf;
    }

    public function Gravar() {
        // Conexão com o banco de dados (altere as credenciais conforme necessário)
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "cadastros";

        $conn = new mysqli($servername, $username, $password, $dbname);



        // Verificar a conexão
        if ($conn->connect_error) {
            die("Conexão com o banco de dados falhou: " . $conn->connect_error);
        }

        // Inserir os dados na tabela do banco de dados
        $nome = $this->nome;
        $cpf = $this->cpf;

        $sql = "INSERT INTO pessoas (nome, cpf) VALUES ('$nome', '$cpf')";

        if ($conn->query($sql) === TRUE) {
            echo "<p>Cadastro realizado com sucesso!</p>";
            
        } else {
            echo "Erro: " . $sql . "<br>" . $conn->error;
        }

        $conn->close();
    }

    public function __construct($db) {
        $this->conn = $db;
    }


    public function listarPessoas() {
        $query = "SELECT id, nome, cpf FROM " . $this->table_name;

        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        return $stmt->fetchAll();
    }
}

