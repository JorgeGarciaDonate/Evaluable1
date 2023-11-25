<?php

// Realizar un script en PHP se obtenga un número aleatorio entre 1 y 100.
// Deberá mostrarse en pantalla el número generado y la suma de todos los números
// pares anteriores a él.

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["btnCalcular"])) {
    $numAleatorio = $_POST["numero"];
    $sumaPares = 0;

    for ($i = 1; $i < $numAleatorio; $i++) {
        if ($i % 2 == 0) {
            $sumaPares += $i;
        }
    }

    echo "<h2>Número ingresado: " . $numAleatorio . "</h2>";
    echo "<h2>Suma de todos los pares anteriores: " . $sumaPares . "</h2>";
}

?>
