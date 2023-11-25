<!-- Realizar un programa en php en el que dado un número entero positivo determine si es
par o impar. Si el número no es un entero positivo deberá de mostrar un mensaje
indicándolo (la función is_integer puede ayudarte)
-->

<?php
// Definir el número
$n1 = 4;

// Determinar si es par o no

if ($n1 % 2 == 0) {
    echo "es par";
} else
    echo "es impar";
?>