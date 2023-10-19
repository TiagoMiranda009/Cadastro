<?php
require_once 'conexaobd.php';

class FormularioAlteracao {
    private $conn;
    private $id;
    private $nome;
    private $cpf;

    public function __construct($conn, $id) {
        $this->conn = $conn;
        $this->id = $id;
        $this->buscarDados();
    }

    private function buscarDados() {
        $sql = "SELECT * FROM pessoas WHERE id = $this->id";
        $result = $this->conn->query($sql);

        if ($result->num_rows == 1) {
            $row = $result->fetch_assoc();
            // var_dump($row);
            $this->nome = $row['nome'];
            $this->cpf = $row['cpf'];
        } else {
            echo "Nenhum registro encontrado com o ID fornecido.";
            exit();
        }
    }

    public function exibirFormulario() {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Formulário de Alteração</title>
        </head>
        <body>
            <form action="atualizar.php" method="post">
                <input type="hidden" name="id" value="<?php echo $this->id; ?>">
                Nome: <input type="text" name="nome" value="<?php echo $this->nome; ?>"><br><br>
                CPF: <input type="text" name="cpf" value="<?php echo $this->cpf; ?>"><br><br>
                <input type="submit" value="Atualizar Dados">
            </form>
        </body>
        </html>
        <?php
    }
}

// Verificar se o ID está definido e não vazio
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $formulario = new FormularioAlteracao($conn, $id);
    $formulario->exibirFormulario();
}
?>
