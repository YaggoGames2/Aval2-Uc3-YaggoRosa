<?php
$pokemons = ["ciderace", "pikachu", "lucario", "greninja", "meowscarada", "mimikyu"];

$posicao = array_search("pikachu", $pokemons);

if ($posicao !== false) {
    $resultado = "O pokémon 'pikachu' foi encontrado na posição: " . $posicao;
} else {
    $resultado = "O pokémon não foi encontrado na pokebola";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array array_search</title>
</head>
<body>
    <h1>Array search</h1>
    <p><?php echo $resultado; ?> </p>
</body>
</html>
