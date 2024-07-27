<?php
error_reporting(E_ALL);
require(__DIR__ . '/functionalities/database_functions.php');
$title = "Voici le top 10 mondial au tennis";
$players=players();
$favoriteplayer = array("Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Cubenapé", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Soulivaneuh", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Jimmy Novaaaa", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov", "Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov");
$aleatoire = array_rand($favoriteplayer);
$aleatoire2 = $favoriteplayer[$aleatoire];

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title; ?></title>
    <link href="/assets/css/top.css" rel="stylesheet">
</head>

<body>
    <div class="lien">
    </div>
    <table cellpadding="5" cellspacing="5">
        <tr>
            <td>Prenom</td>
            <td>Nom</td>
            <td>Nationalite</td>
            <td>Points</td>
        </tr>
        <?php foreach ($players as $player) : ?>
            <tr>
                <td><?php echo $player["firstname"]; ?></td>
                <td><?php echo $player["lastname"]; ?></td>
                <td><?php echo $player["nationality"]; ?></td>
                <td><?php echo $player["points"]; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>Mon joueur favori est : <?php echo $aleatoire2 ?><br><br> Vous pensez qu'il manque un joueur ?</p>
    <a href="./ad_player_user.php"> Ajoutez-le !</a>
    <!-- Formulaire pour enregistrer un commentaire -->
    <form action="./save_comment.php" method="post">
        <p>
            <label for="commentaire">Votre commentaire :</label>
            <input type="text" name="commentaire" id="commentaire" placeholder="Ex. : Ce site est superbe" size="50" maxlength="100" required>
        </p>
        <button type="submit" name="submit">Envoyer</button>
    </form>

    <footer class="page-footer">
        <p>Mes résaux :</p><a href="https://github.com/BRICSO1">Github</a> <a href="https://discord.com/channels/1207714141889106051/1207714142337761363">Discord</a>
    </footer>
</body>

</html>