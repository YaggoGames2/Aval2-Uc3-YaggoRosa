<?php
$pokemons = ["ciderace", "pikachu", "lucario", "greninja", "meowscarada"];

array_splice($pokemons, 2,0, "mimikyu"); //colocou o mimikyu na posição 3

foreach ($pokemons as $pokemon) {
    echo $pokemon . "<br>";
}
?>

