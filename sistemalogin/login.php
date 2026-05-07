<?php
require_once "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['Email']) && isset($_POST['senha'])) {

        $email = trim($_POST["Email"]);
        $senha = trim($_POST["senha"]);

        $stmt = $conn->prepare("INSERT INTO login (email, senha) VALUES (:Emai");
        
        }
        
}

?>

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <h2>Login</h2>
        <input type="text" name="nome" placeholder="Email">
        <input type="number" name="senha" placeholder="senha">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>