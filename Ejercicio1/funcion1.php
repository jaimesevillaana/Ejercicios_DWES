<?php

//usando global $contador
$contador = 0;
function incrementar() {
    global $contador;
    $contador++;
    return $contador;
}
echo incrementar() . "\n"; 
echo incrementar() . "\n";

//usando $GLOBALS['contador']

