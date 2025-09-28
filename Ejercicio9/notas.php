<?php

$notas = [4.5, 6, 9, 3, 7.5, 5.5, 10];

function calcularPromedio($notas) {
    if (count($notas) === 0) {
        return 0;
    }
    return array_sum($notas) / count($notas);
}

$clasificar = function($nota) {
    if ($nota < 5) {
        return "Suspenso";
    } elseif ($nota < 7) {
        return "Aprobado";
    } elseif ($nota < 9) {
        return "Notable";
    } else {
        return "Sobresaliente";
    }
};

//clasificar con map
$clasificaciones = array_map($clasificar, $notas);
echo "\nClasificación de notas: \n";
print_r($clasificaciones);

//filtrar aprobados
$aprobados = array_filter($notas, fn($n) => $n >= 5);
echo "\nAprobados: \n";
print_r($aprobados);

//calcular nota más alta
$notaMaxima = array_reduce($notas, fn($max, $n) => $n > $max ? $n : $max, $notas[0]);
echo "\nNota más alta del grupo: $notaMaxima\n";

//calcular promedio
$promedio = calcularPromedio($notas);
echo "\nPromedio del grupo: $promedio\n";

