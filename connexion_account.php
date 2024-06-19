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
?>
  
<!DOCTYPE>
<html>
  <head>
    <title>Vous avez été connecté</title>
    <link href="./top.css" rel="stylesheet">
  </head>
  <body>
    <p>
      <?php
    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        echo 'Connexion réussie !';
    } else {
        echo 'Nom d\'utilisateur ou mot de passe incorrect.';
    }
  ?>
    </p>
    <a href="./top.php">retour au menu principal</a>
  </body>
</html>
  <?php
}
?>
