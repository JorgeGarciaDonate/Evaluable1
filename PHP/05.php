<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Sueldo Neto</title>
</head>
<body>

<?php
// Realiza un programa en php que dados dos números indique cuál de dos números es el
// /mayor. Inicialmente el programa mostrará el valor de los números y a continuación
// indicará: El número _ es mayor que el número _. 

$numero_01 = 8;
$numero_02 = 10;

echo "Primer número : " . $numero_01 . " " . "Segundo número : " . $numero_02; 

if ($numero_01 > $numero_02) {
    echo "El número " . $numero_01 . " es mayor que el número " . $numero_02;
} else {
    echo "El número " . $numero_02 . " es mayor que el número " . $numero_01;
}

?>

</body>
</html>
