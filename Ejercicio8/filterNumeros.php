<?php
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 12, 40];
$pares = array_filter($numeros, fn($n) => $n % 2 === 0);
$numMayor = array_filter($numeros, fn($n) => $n > 10);

echo "Números pares: \n";
print_r($pares);

echo "Números mayores de 10: \n";
print_r($numMayor);
?>