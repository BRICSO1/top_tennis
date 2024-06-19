<?php
$dsn = 'mysql:host=localhost';'dbname=user';
$username = 'root';
$password = '';

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM users WHERE username = :username';
    $stmt = $pdo->prepare($sql);
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        echo 'Connexion réussie !';
    } else {
        echo 'Nom d\'utilisateur ou mot de passe incorrect.';
    }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Connexion</title>
</head>
<body>
    <form action="connexion_account.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Se connecter</button>
    </form>
    <a href="./register.php">Vous n'avez pas de compte ? Créez en un ici !</a>
    <a href="./top.php">Retour au menu principl</a>
</body>
</html>
