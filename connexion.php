<?php
$host = 'localhost'; // Adresse du serveur MySQL
$dbname = 'tennis_website'; // Nom de la base de données
$username = 'root'; // Nom d'utilisateur MySQL
$password = ''; // Mot de passe MySQL

// Chaîne de connexion PDO
$dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";

// Options de connexion PDO
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Active les exceptions PDO
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Récupération des résultats sous forme de tableau associatif
    PDO::ATTR_EMULATE_PREPARES => false, // Désactive l'émulation des requêtes préparées
];

// Tentative de connexion
try {
    $pdo = new PDO($dsn, $username, $password, $options);
    // Connexion réussie
    // echo "Connexion réussie à la base de données";
} catch (PDOException $e) {
    // En cas d'erreur de connexion
    // echo "Erreur de connexion : " . $e->getMessage();
}
// séléction de la base de donnée de tout les joueurs de la table
$requete = "SELECT * FROM players_of_tennis";
$statement = $pdo->prepare($requete);
$statement->execute();
$players = $statement->fetchAll(PDO::FETCH_ASSOC);
