<!DOCTYPE html>
<html>
<head>
    <title>Formulário de Cadastro</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div>

        <form method="post" action="salvar_cadastro.php">

            <h1>Cadastro</h1>
    
            <input type="text" name="nome" placeholder="Nome" required><br>
            <br><br>
    
            <input type="text" name="cpf" placeholder="CPF" required><br>
            <br><br>

            <button type="submit" value="Cadastrar">Cadastrar</button>
            <br><br>

            <a href="editar.php">Editar </a><a href="index.php"> Inicio</a><a href="formulario_listagem.php"> Listar</a>
        </form>

    </div>



</body>
</html>
