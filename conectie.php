<?php
session_start();
if (!empty($_SESSION['username'])) {
    echo ("vous êtes conneté en tant ".$_SESSION["username"]."!<br><a href=\"./deco.php\"> déconnexion</a>");
} else {
    echo("vous n'êtes pas connété <br><a href=\"./register.php\">S'inscrire</a><br>
        <a href=\"./login.php\">Se connecter</a><br>");
}
    ?>