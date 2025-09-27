<?php

class EdadInvalidaException extends Exception {}

function verificarEdad($edad) {
    if ($edad <= 0) {
        throw new EdadInvalidaException("Edad negativa no válida");
    }
    if ($edad < 18) {
        throw new EdadInvalidaException("Edad menor de 18 no válida");
    }
    return "Acceso permitido";
}

$edades = [12, 34, 56, 90, -3, 0];

foreach ($edades as $edad) {

    try {
        echo verificarEdad($edad) . "\n";
    } catch (EdadInvalidaException $e) {
        echo "Error " . $e -> getMessage() . "\n";
    } finally {
        echo "Finalizacion terminada para edad " . $edad . "\n";
    }
}