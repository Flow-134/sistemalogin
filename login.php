<?php
require_once "conexao.php";
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['email']) && isset($_POST['senha'])) {

        $email = trim($_POST["email"]);
        $senha = trim($_POST["senha"]);

        $stmt = $conn->prepare("INSERT INTO login (email, senha) VALUES (:email, :senha)");
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':senha', $senha);

        
        if ($stmt->execute()) {
            echo "Login cadastrado com sucesso!";
        } else {
            echo "Erro ao cadastrar login.";
        }

    }
        
}

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
        <label for="email">Email:</label>
        <input type="text" name="email" placeholder="Email">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Senha">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>