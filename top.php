<?php
session_start();
$title = "Voici le top 10 mondial au tennis";
$favoriteplayer = array("Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur","Cubenapé", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Soulivaneuh", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev","Jimmy Novaaaa", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov","Jannik Sinner", "Carlos Alcaraz", "Novak Djokovic", "Alexender Zverev", "Daniil Medvedev", "Andrey Rublev", "Casper Ruud", "Hubert Hurkacz", "Alex De Minaur", "Grigor Dimitrov");
$aleatoire = array_rand($favoriteplayer);
$aleatoire2 = $favoriteplayer[$aleatoire];


include("connexion.php");
// $user_id = $_SESSION['user_id'];
// $sql = 'SELECT id, username, email, created_at FROM users WHERE id = :id';
// $stmt = $pdo->prepare($sql);
// $stmt->execute(['id' => $user_id]);
// $user = $stmt->fetch(PDO::FETCH_ASSOC);
// if (!$user) {
//     echo 'Utilisateur non trouvé.';
//     exit;
// }


?>

<!DOCTYPE html>
<html>

<head>
    <title><?php echo $title; ?></title>
    <link href="./top.css" rel="stylesheet">
</head>

<body>
<div class="lien">
<a href="./register.php">S'inscrire</a><br>
<a href="./login.php">Se connecter</a><br>
<a href="./deco.php">Se déconnecter</a>
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
    <form action="save_comment.php" method="post">
        <p>
            <label for="commentaire">Votre commentaire :</label>
            <input type="text" name="commentaire" id="commentaire" placeholder="Ex. : Ce site est superbe" size="50" maxlength="100" required>
        </p>
        <button type="submit" name="submit">Envoyer</button>
    </form>

    <!-- <h4>Bienvenue, <?php echo htmlspecialchars($user['username']); ?> !</h4>
    <p>Email : <?php echo htmlspecialchars($user['email']); ?></p> -->
<br><br><br><br><br><br><br><br><br>
    <footer>
        <p>Mes résaux :</p><a href="https://github.com/BRICSO1">Github</a>  <a href="https://discord.com/channels/1207714141889106051/1207714142337761363">Discord</a>
</footer>
</body>

</html>