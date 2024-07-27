<?php
include("./protect.php");
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un joueur de tennis</title>
    <link href="/top.css" rel="stylesheet">
</head>

<body>
    <h2>Ajouter un joueur de tennis</h2>
    <form action="./save_player.php" method="post">
        <label for="first_name">Prénom :</label>
        <input type="text" id="first_name" name="first_name" required><br><br>

        <label for="last_name">Nom :</label>
        <input type="text" id="last_name" name="last_name" required><br><br>

        <label for="nationality">Pays :</label>
        <input type="text" id="nationality" name="nationality" required><br><br>

        <label for="points">Points :</label>
        <input type="number" id="points" name="points" required><br><br>


        <input type="submit" value="Ajouter le joueur">
    </form>
    <a href="/index.php">Retour au menu principal</a>
    <a href="/deco.php">Se déconnecter</a>
  
    <footer class="page-footer">
        <p>Mes résaux :</p><a href="https://github.com/BRICSO1">Github</a> <a href="https://discord.com/channels/1207714141889106051/1207714142337761363">Discord</a>
    </footer>
</body>

</html>