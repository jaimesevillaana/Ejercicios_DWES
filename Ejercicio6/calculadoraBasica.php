<?php

//Funcion leer número para validar
function leerNumero($mensaje) {
    do {
        echo $mensaje;
        $entrada = trim(fgets(STDIN));
        if (is_numeric($entrada)) {
            return $entrada + 0; // Convertir a número
        } else {
            echo "Entrada no válida. Por favor, ingrese un número.\n";
        }
    } while (!is_numeric($entrada));
}

//Funciones normales
function suma($a, $b) {
    return $a + $b;
}
function resta($a, $b) {
    return $a - $b;
}
function multiplicacion($a, $b) {
    return $a * $b;
}
function division($a, $b) {
    return ($b != 0) ? $a/$b : "No se puede dividir entre cero";
}

echo "Suma: " . suma(5, 3) . "\n";
echo "Resta: " . resta(5, 3) . "\n";
echo "Multiplicación: " . multiplicacion(5, 3) . "\n";
echo "División: " . division(5, 0) . "\n";

//Funciones anónimas
$sumaAnonima = function($a, $b) {
    return $a + $b;
};
$restaAnonima = function($a, $b) {
    return $a - $b;
};
$multiplicacionAnonima = function($a, $b) {
    return $a * $b;
};
$divisionAnonima = function($a, $b) {
    return ($b != 0) ? $a/$b : "No se puede dividir entre cero";
};

echo "Suma: " . $sumaAnonima(5, 3) . "\n";
echo "Resta: " . $restaAnonima(5, 3) . "\n";
echo "Multiplicación: " . $multiplicacionAnonima(5, 3) . "\n";
echo "División: " . $divisionAnonima(5, 0) . "\n";

//Funciones flecha
$sumaFlecha = fn($a, $b) => $a + $b;
$restaFlecha = fn($a, $b) => $a - $b;
$mmultiplicacionFlecha = fn($a, $b) => $a * $b;
$divisionFlecha = fn($a, $b) => ($b != 0) ? $a/$b : "No se puede dividir entre cero";

echo "Suma: " . $sumaFlecha(5, 3) . "\n";
echo "Resta: " . $restaFlecha(5, 3) . "\n";
echo "Multiplicación: " . $mmultiplicacionFlecha(5, 3) . "\n";
echo "División: " . $divisionFlecha(5, 0) . "\n";


do {
    echo "\nCalculadora Básica\n";
    echo "1. Suma\n";
    echo "2. Resta\n";
    echo "3. Multiplicación\n";
    echo "4. División\n";
    echo "0. Salir\n";
    echo "Seleccione una opción (1-4): ";

    $opcion = trim(fgets(STDIN));

    //validar que la opcion es válida (numeros entre 0 y 4)
    if (!is_numeric($opcion) || $opcion < 0 || $opcion > 4) {
        echo "Opción no válida. Por favor, selecciona una opcion del 0 al 4.\n";
        continue; //volver al inicio del bucle
    }

    $opcion = (int)$opcion; 

    //si la opción es 0, termina el bucle
    if ($opcion == 0) {
        echo "Adios! Gracias por participar!\n";
        break;
    }

    //pedir números solo si la opción es válida (1-4)
    $num1 = leerNumero("Ingresa el primer número: ");
    $num2 = leerNumero("Ingresa el segundo número: ");

    switch ($opcion) {
        case 1:
            echo "Resultado (funcion normal): " . suma($num1, $num2) . "\n";
            echo "Resultado (funcion anonima): " . $sumaAnonima($num1, $num2) . "\n";
            echo "Resultado (funcion flecha): " . $sumaFlecha($num1, $num2) . "\n";
            break;
        case 2:
            echo "Resultado (funcion normal): " . resta($num1, $num2) . "\n";
            echo "Resultado (funcion anonima): " . $restaAnonima($num1, $num2) . "\n";
            echo "Resultado (funcion flecha): " . $restaFlecha($num1, $num2) . "\n";
            break;
        case 3:
            echo "Resultado (funcion normal): " . multiplicacion($num1, $num2) . "\n";
            echo "Resultado (funcion anonima): " . $multiplicacionAnonima($num1, $num2) . "\n";
            echo "Resultado (funcion flecha): " . $mmultiplicacionFlecha($num1, $num2) . "\n";
            break;
        case 4:
            echo "Resultado (funcion normal): " . division($num1, $num2) . "\n";
            echo "Resultado (funcion anonima): " . $divisionAnonima($num1, $num2) . "\n";       
            echo "Resultado (funcion flecha): " . $divisionFlecha($num1, $num2) . "\n";
            break;
        default:
            echo "Opción no válida. Por favor, seleccione una opción del 0 al 4.\n";
    }

} while ('!== 0');