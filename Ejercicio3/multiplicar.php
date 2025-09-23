<?php
// Definir la función anónima en la variable $multiplicar
$multiplicar = function(int $a, int $b): int {
    return $a * $b;
};

// Llamar a la función
$resultado = $multiplicar(3, 4);

echo "3 x 4 = $resultado\n"; // 3 x 4 = 12
?>
