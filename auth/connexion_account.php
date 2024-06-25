<?php
session_start();
// var_dump($_POST);
include("../connexion.php");

$username = $_POST['username'];
$password = $_POST['password'];
// todo : faire la rêqeute sql et vérifié qu'il y est un résultat 
if ($username == "arthur" && $password == "azerty") {
  $_SESSION['username'] = $username;
  echo ("c'est bon vous êtes connecté");
} else {
  die('<a href="../login.php">Réessayer</a>');
} ?>

<!DOCTYPE>
<html>

<head>
  <title>Vous avez été connecté</title>
  <link href="./top.css" rel="stylesheet">
</head>

<body>
  <p>
  </p>
  <a href="../top.php">Retour au menu principal</a>
  <a href="../login.php">Réessayer</a>
</body>

</html>
<?php

?>