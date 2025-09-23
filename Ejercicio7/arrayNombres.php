<?php
$nombres = ["Ana", "Pedro", "Luis"];

$nombresMayusculas = array_map(function($nombre) {
    return strtoupper($nombre);
}, $nombres);

$nombresCortesia = array_map(function($nombre) {
    return "Sr./Sra. " . $nombre;
}, $nombresMayusculas);

echo "Original: \n";
print_r($nombres);

echo "\nMayúsculas: \n";
print_r($nombresMayusculas);

echo "\nCon Cortesía: \n";
print_r($nombresCortesia);