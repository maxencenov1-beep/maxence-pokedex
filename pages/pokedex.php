<?php
 require_once __DIR__ . '/../config/database.php';

//Prépare la requete 
$select = $pdo->query("SELECT * FROM pokemon");

//Envoie la requete
$pokemons = $select->fetchALL(PDO::FETCH_OBJ);


foreach ($pokemons as $pokemon) {
    echo ("<a href='detail.php?pokemon_id={$pokemon->pokemon_id}'>");
    echo("<img width='150px' src='{$pokemon->pokemon_img}'>");
    echo("<h1>{$pokemon->pokemon_nom}</h1>");
    echo ("</a>");
}
?>