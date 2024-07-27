<?php
session_start();
include(__DIR__ . '/../config/database.config.php');
// var_dump($_SESSION);
if (!empty($_SESSION['username'])) {
    echo ("bienvenue {$_SESSION['username']} !<br>");
} else {
    die('
    <!DOCTYPE>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>vous n"êtest pas connecté </title>
    <link href="../top.css" rel="stylesheet">
</head>
<body>
   vous devez être connecté pour accéder à cette page <a href="./login.php"> connectez vous </a>');
}