<?php
function imprimirPiramide($niveles) {
    for ($i = 1; $i <= $niveles; $i++) {
        for ($j = $i; $j < $niveles; $j++) {
            echo " ";
        }
  
        for ($k = 1; $k <= (2 * $i - 1); $k++) {
            echo "*";
        }
        echo "\n";
    }
}

$niveles = 5;
imprimirPiramide($niveles);
?>
