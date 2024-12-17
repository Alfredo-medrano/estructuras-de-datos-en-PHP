<?php
$numeros = array(1, 2, 3, 4, 5, 6, 7, 8);
$pares = array_filter($numeros, function($numero) {
    return $numero % 2 == 0;
});
$suma_pares = array_sum($pares);

echo "La suma de los números pares es: " . $suma_pares;
?>
