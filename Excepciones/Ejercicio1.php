<?php

function dividir($n1, $n2) {
    if ($n2 === 0) {
        throw new Exception("No se puede dividir entre 0");
    }
    return $n1 / $n2;
}

    $numeros =[ 
        [10, 2], 
        [12, 4],
        [8, 0]
    ] ;

    foreach ($numeros as $n) {
        try {
            [$n1, $n2] = $n;
            $resultado = dividir($n1, $n2);
            echo "El resultado de $n1 / $n2 = $resultado\n";
        } catch (Exception $e) {
            echo "Ocurrio una excepcion: " . $e -> getMessage() . "\n";
        } finally {
            echo "El programa ha terminado";
        }
    }