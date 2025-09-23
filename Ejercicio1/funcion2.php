<?php
$contador = 0;
function incrementar() {
    $GLOBALS['contador']++;
    return $GLOBALS['contador'];
}

echo incrementar() . "\n"; 
echo incrementar() . "\n";
