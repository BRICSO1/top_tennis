<?php
function db()
{
    // Paramètres de configuration
    $config = require(__DIR__ . '/../config/database.config.php');

    // DSN (Data Source Name)
    $dsn = "mysql:host=$config[host];dbname=$config[dbname];charset=$config[charset]";

    // Options PDO
    $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];

    $pdo = new PDO($dsn, $config['username'], $config['password'], $options);
    return $pdo;
}
