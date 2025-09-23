<?php
// Función que devuelve otra función (closure)
function crearMultiplicador(int $factor): callable {
    return function(int $numero) use ($factor): int {
        return $numero * $factor;
    };
}

// Ejemplo de uso
$por2 = crearMultiplicador(2);
$por5 = crearMultiplicador(5);

echo $por2(5) . "\n";  // 10
echo $por2(7) . "\n";  // 14
echo $por5(3) . "\n";  // 15
echo $por5(10) . "\n"; // 50
?>
