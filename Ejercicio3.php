<?php
function frecuenciaCaracteres($cadena) {
    $frecuencias = array();
    $longitud = strlen($cadena);
    
    for ($i = 0; $i < $longitud; $i++) {
        $caracter = $cadena[$i];
        if (isset($frecuencias[$caracter])) {
            $frecuencias[$caracter]++;
        } else {
            $frecuencias[$caracter] = 1;
        }
    }
    
    return $frecuencias;
}

$texto = "Mañana es un nuevo dia";
$resultado = frecuenciaCaracteres($texto);
print_r($resultado);
?>
