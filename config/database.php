<?php
 require_once __DIR__ . '/../vendor/autoload.php';

$host = '127.0.0.1'; // Utilisez 127.0.0.1 de préférence à 'localhost' pour forcer TCP/IP
$db   = 'maxence_pokedex_bdd';
$user = 'root';
$pass = '';
$port = '3306'; // Port par défaut MySQL/MariaDB

$dsn = "mysql:host=$host;dbname=$db;port=$port;charset=utf8mb4";

$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];

try {
     $pdo = new PDO($dsn, $user, $pass, $options);
     echo "Connexion à la base de données réussie !";
} catch (\PDOException $e) {
     // En cas d'échec, le message s'affiche proprement
     throw new \PDOException($e->getMessage(), (int)$e->getCode());
}








// //Charge les variables dans le fichier .env
// $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv->load();


// try {
//     $dsn = "mysql:host={$_ENV['DB_HOST']};port={$_ENV['DB_PORT']};dbname={$_ENV['DB_NAME']}";
//     $username = $_ENV['DB_USERNAME'];
//     $password = $_ENV['DB_PASSWORD'];

//     $options = [
//         // ignore les certificats
//         PDO::MYSQL_ATTR_SSL_VERIFY_SERVER_CERT => false,
//         // Active la connexion SSL
//         PDO::MYSQL_ATTR_SSL_CA => true,
//         // Affiche les erreurs retournees par la BDD
//         PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
//     ];
//     $connection = new PDO($dsn, $username, $password, $options);
    
// }catch (Exception $e) {
//     echo("Connection à la BDD impossible". $e->getMessage());
//     die();
// }


// //Prépare la requete 
// $select = $connection->query("SELECT* FROM pokemon");

// //Envoie la requete
// $pokemons = $select->fetchALL(PDO::FETCH_OBJ);

// var_dump($pokemons);

// // echo ($pokemons[0]["pokemon_nom"]);

// foreach ($pokemons as $pokemon) {
//     echo("<img width='150px' src='{$pokemon->$pokemon_img}'>");
//     echo("<h1>{pokemon->pokemon_nom}</h1>");
// }





?>