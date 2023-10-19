<?php
require_once 'login.php'; //validação de conexão com o DB

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <form action="login.php" method="post">
        <input type="text" name="nome" placeholder="Usuário">
        <input type="text" name="cpf" placeholder="Senha">
        <input type="submit" value="Login">
    </form>
</body>
</html>