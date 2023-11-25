<!-- 16. Realiza una matriz de 3 filas por 4 columnas. El contenido de cada uno de los elementos
de la matriz se generará de manera aleatoria. Una vez generada:
• Muestra el contenido de la matriz en formato filas x columnas
• Identifica el número mayor y menor generado dentro de la matriz
• Calcula la media de los números impares contenidos en la matriz
• Imprime únicamente la diagonal
• Imprime únicamente la primera columna
 -->

<?php
// números aleatorios
function generarNumeroAleatorio() {
    return rand(1, 100); // Puedes ajustar el rango según tus necesidades
}

// Inicializar la matriz
$matriz = array();
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        $matriz[$i][$j] = generarNumeroAleatorio();
    }
}

//  matriz en formato filas x columnas
echo "Matriz $i x $j:\n";
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $matriz[$i][$j] . "\t";
    }
    echo "\n";
}

// número mayor y menor
$mayor = $matriz[0][0];
$menor = $matriz[0][0];
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($matriz[$i][$j] > $mayor) {
            $mayor = $matriz[$i][$j];
        }
        if ($matriz[$i][$j] < $menor) {
            $menor = $matriz[$i][$j];
        }
    }
}

echo "Número mayor: $mayor\n";
echo "Número menor: $menor\n";

// media de los números impares
$totalImpares = 0;
$countImpares = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 4; $j++) {
        if ($matriz[$i][$j] % 2 != 0) {
            $totalImpares += $matriz[$i][$j];
            $countImpares++;
        }
    }
}

$mediaImpares = ($countImpares > 0) ? ($totalImpares / $countImpares) : 0;
echo "Media de los números impares: $mediaImpares\n";

// Imprimir la diagonal
echo "Diagonal:\n";
for ($i = 0; $i < 3; $i++) {
    echo $matriz[$i][$i] . "\t";
}
echo "\n";

// Imprimir la primera columna
echo "Primera columna:\n";
for ($i = 0; $i < 3; $i++) {
    echo $matriz[$i][0] . "\n";
}
?>
