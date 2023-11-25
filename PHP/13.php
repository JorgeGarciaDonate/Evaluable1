<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Realiza un programa en php en el que se declare un vector de 5 posiciones. Cada
// posición tomará como valor un color distinto (azul, rojo, verde, rosa, naranja). A
// continuación, deberá de comprobar si el valor rosa se encuentra almacenado en el array.
// Si es así, deberá de borrar el elemento del array

$vector = ["azul", "rojo", "verde", "rosa", "naranja"];

// Buscar la posición del valor "rosa" en el array
$posicion = array_search("rosa", $vector);

if ($posicion !== false) {
    // Si se encuentra "rosa" en el array, eliminarla
    unset($vector[$posicion]);
}

// Mostrar el contenido actual del array
foreach ($vector as $color) {
    echo $color . " ";
}
?>
</body>
</html>