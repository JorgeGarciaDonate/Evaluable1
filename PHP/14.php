<!-- Almacene en un vector los 10 primeros número pares. Imprímalos cada uno en una
línea -->

<?php
// Declarar un array para almacenar los números pares
$numerosPares = array();

// Utilizar un bucle for para generar y almacenar los primeros 10 números pares
for ($i = 2; count($numerosPares) < 10; $i += 2) {
    $numerosPares[] = $i;
}

// Imprimir los números pares uno por uno en líneas separadas
foreach ($numerosPares as $numero) {
    echo $numero . "<br>";
}
?>
