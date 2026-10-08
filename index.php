<?php
require_once __DIR__ . '/vendor/autoload.php';

//Charge les variables dans le fichier .env
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();


try {
    $dsn = "mysql:host={$_ENV['DB_HOST']};port={$_ENV['DB_PORT']};dbname={$_ENV['DB_NAME']}";
    $username = $_ENV['DB_USERNAME'];
    $password = $_ENV['DB_PASSWORD'];

    $options = [
        // ignore les certificats
        PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
        // Active la connexion SSL
        PDO::MYSQL_ATTR_SSL_CA => true,
        // Affiche les erreurs retournees par la BDD
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    ];
    $connection = new PDO($dsn, $username, $password, $options);
    
}catch (Exception $e) {
    echo("Connection à la BDD impossible". $e->getMessage());
    die();
}
?>