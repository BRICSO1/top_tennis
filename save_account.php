<?php
include("functionalities/database_functions.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $sql = 'INSERT INTO users (username, email, password) VALUES (:username, :email, :password)';
    $stmt = $pdo->prepare($sql);
?>

    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>incrisption</title>
    </head>

    <body>
        <?php
        try {
            $stmt->execute(['username' => $username, 'email' => $email, 'password' => $password]);
            echo 'Inscription réussie !';
        } catch (PDOException $e) {
            echo 'Erreur : ' . $e->getMessage() ?> <a href="/register.php">réesayer</a><?php
        }
}
?>
    <a href="/index.php">retour au menu princpal</a>
    </body>

    </html>