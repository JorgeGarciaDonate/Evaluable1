<!-- Realizar un programa en php donde se declare la variable posición. Esta variable puede
tomar los valores arriba o abajo. Imprimir el valor que toma variable. Si no toma ninguno
de estos dos valores imprimir por pantalla: “La variable contiene otro valor distinto de
arriba y abajo”. Realizar el ejercicio utilizando la sentencia SWITCH.
-->

<?php
// Declarar variable posición
$posicion = " ";

// Asignar un valor a la variable $opcion
$opcion = 1;

switch ($opcion) {
    case 1:
        $posicion = "Arriba";
        break;
    case 2:
        $posicion = "Abajo";
        break;
    default:
        $posicion = "La variable contiene otro valor distinto de arriba y abajo";
}

echo $posicion;
?>
