<?php

//funcion normal
function calcularPromedio(array $numeros): float {
    $cantidad = count($numeros);
    if ($cantidad === 0) {
        return 0; // Evitar división por cero
    }

    $suma = array_sum($numeros);
    return $suma / $cantidad;
}

$datos = [10, 20, 30, 40, 50];
$resultado1 = calcularPromedio($datos);
echo "El promedio es: " . $resultado1 . "\n";


//funcion anonima
$calcularPromedioAnonimo = function(array $numeros): float {
    $cantidad = count($numeros);
    if ($cantidad === 0) {
        return 0; 
    }

    return array_sum($numeros) / $cantidad;
};

$datos2 = [15, 25, 35, 45, 55];
$resultado2 = $calcularPromedioAnonimo($datos2);

echo "El promedio es: " . $resultado2 . "\n";

//funcion flecha
$calcularPromedioFlecha = fn(array $numeros): float =>
    count($numeros) > 0 ? array_sum($numeros) / count($numeros) : 0;

$datos3 = [5, 15, 25, 35, 45];
$resultado3 = $calcularPromedioFlecha($datos3);
echo "El promedio es: " . $resultado3 . "\n";