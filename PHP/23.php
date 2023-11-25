<!-- 
Ejercicio 23 - Jorge García Donate - Daw2
Crear un array de 20 elementos que contenga números aleatorios entre 1 y 30 sin
repetir. Mostrarlo en pantalla ordenado descendentemente. Los números impares se
mostrarán en color rojo y los pares en color verde. Mostrar en pantalla cuántos números
salieron repetidos durante la generación del array y cuáles fueron. Hacerlo con dos arrays.
Utiliza funciones de usuario.
-->

<?php
// Función para un número aleatorio en un rango
function numeroAleatorio($min, $max) {
    return rand($min, $max);
}

// arrays 
$numerosUnicos = array();
$numerosRepetidos = array();

// Generar números únicos
while (count($numerosUnicos) < 20) {
    $randNum = numeroAleatorio(1, 30);
    
    if (!in_array($randNum, $numerosUnicos)) {
        $numerosUnicos[] = $randNum;
    } else {
        // guardar números repetidos
        if (isset($numerosRepetidos[$randNum])) {
            $numerosRepetidos[$randNum]++;
        } else {
            $numerosRepetidos[$randNum] = 1;
        }
    }
}

// números únicos en orden descendente
rsort($numerosUnicos);

// números únicos en pantalla
foreach ($numerosUnicos as $i => $numero) {
    $color = ($numero % 2 == 0) ? "green" : "red";
    echo "<p style='color: $color;'>$i : $numero</p>";
}

// cuántas veces se repite cada número durante la generación
echo "Números repetidos: ";
echo "</br>";
foreach ($numerosRepetidos as $numero => $contador) {
    echo "$numero (repetido $contador veces) ";
    echo "</br>";
}
?>