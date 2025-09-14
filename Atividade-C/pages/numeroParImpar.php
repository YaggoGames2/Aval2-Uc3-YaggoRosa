<?php
$numeros = [2, 3, 4, 7, 9, 10, 50, 55, 70, 100];
$par = 0;
$impar = 0;

foreach ($numeros as $numero) {
    echo $numero . "<br>";
    
if ($numero % 2 == 0) {
    $par++;
} else {
    $impar++;
}
}
echo "Quantidade de pares: " . $par ."<br>";
echo "Quantidade de impares: ". $impar ."<br>";


?>