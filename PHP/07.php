<!-- Sabiendo que la funcion RAND nos retorna un valor aleatorio entre un rango de dos
enteros: Almacena en una variable un valor entero que la computadora genera de forma
aleatoria entre 1 y 100. Hacer un programa que muestre por pantalla el valor generado.
Mostrar además si es menor o igual a 50 o si es mayor. 
-->

<?php
// Definir el número aleatorio
$numAleatorio = rand(1, 100); 

//mostrar el número
echo $numAleatorio;

// Determinar si es mayor o menor de 50

if ($numAleatorio > 50) {
    echo " es mayor que 50";
} else
    echo " es menor que 50";
?>