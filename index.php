<?php
session_start();
require "conexao.php";
if (!isset($_SESSION["email"])) {
    header("Location: login.php");
    exit;
}



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina RESTRITA</title>
</head>
<body>
    <h1>Pagina Restrita</h1>
</body>
</html>