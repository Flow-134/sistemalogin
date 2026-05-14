<?php
session_start();
require "conexao.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $email = trim($_POST["email"]);
        $senha = trim($_POST["senha"]);

        $stmt = $conn->prepare("SELECT * FROM login  WHERE email =:email AND senha = :senha");
        $stmt->bindValue(':email', $email);
        $stmt->bindValue(':senha', $senha);
        $stmt->execute();

        $user = $stmt->fetch();

        if($user) {

        $_SESSION["email"] = $user["email"];

        header("Location:index.php");
        exit;

         } else  {
            $erro = "Email ou senha incorretos";
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
        <?php
        if (!empty($erro)) : ?>
        <div><?php echo $erro; ?> </div>
        <?php endif; ?>
        <input type="text" name="email" placeholder="email">
        <input type="password" name="senha" placeholder="senha">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>