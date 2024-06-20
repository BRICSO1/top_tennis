<?php
/<?php
// Paramètres de configuration
$host = '127.0.0.1';
$db   = 'nom_de_la_base_de_donnees';
$user = 'nom_utilisateur';
$pass = 'mot_de_passe';
$charset = 'utf8mb4';

// DSN (Data Source Name)
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

// Options PDO
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
    // Créer une nouvelle instance de PDO
    $pdo = new PDO($dsn, $user, $pass, $options);
    echo "Connexion réussie !";}yyyyy
$requete = "SELECT * FROM players_of_tennis";
$statement = $pdo->prepare($requete);
$statement->execute();
$players = $statement->fetchAll(PDO::FETCH_ASSOC);