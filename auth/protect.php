<?php
session_start();
// var_dump($_SESSION);
if (@$_SESSION['username'] == "arthur") {
    echo ("bienvenue arthur !<br>");
} else {
    die("vous devez être connecté pour accéder à cette page <a href='./login.php'> connectez vous </a>");
}
