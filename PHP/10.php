<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>10</title>
</head>
<body>
<?php

// Realizar un programa en php que escriba por pantalla la sucesión de Fibonacci. Cada
// número de la serie de Fibonacci se forma sumando los dos números anteriores.

$Fibonacci []= 0;
$Fibonacci []= 1;

for ($i = 2; $i < 25 ; $i++){
    $Fibonacci[$i] = ( $Fibonacci[$i - 1]) + ( $Fibonacci[$i - 2]);
}

// Imprimir los números de la serie de Fibonacci
foreach ($Fibonacci as $numero) {
    echo $numero . " ";
}

?>
</body>
</html>