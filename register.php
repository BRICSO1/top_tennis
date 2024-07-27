<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>log-in</title>
    <link href="/assets/css/top.css" rel="stylesheet">
</head>
<body>
    <h2>S'inscrire</h2>
<form action="./save_account.php" method="post">
        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="email">Email :</label>
        <input type="email" id="email" name="email" required>
        <br>
        <label for="password">Mot de passe :</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">S'inscrire</button>
</form>
<a href="/login.php">Vous avez déjà un compte ? </a><br>
<a href="/index.php">Retour au menu principal</a>

<footer class="page-footer">
        <p>Mes résaux :</p><a href="https://github.com/BRICSO1">Github</a>  <a href="https://discord.com/channels/1207714141889106051/1207714142337761363">Discord</a>
</footer>
</body>
</html>
