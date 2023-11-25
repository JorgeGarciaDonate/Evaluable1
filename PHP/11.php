<!-- 1. Realiza un programa en php donde dada la cadena: “Estamos dando nuestros primeros
pasos en programación utilizando el lenguaje php” imprima por pantalla:
• La longitud de la cadena.
• La primera ocurrencia de “os”.
• La búsqueda de la palabra “nuestros”.
• La subcadena “lenguaje php”.
• La subcadena “nuestros primeros pasos”.
• El reemplazo de las palabras estamos por estoy y nuestros por mis.
• Todas las letras de la cadena en minúsculas.
• Todas las letras de la cadena en mayúsculas
• La frase con todas las letras iniciales de cada palabra en mayúscula.
-->

<?php

$cadena = "Estamos dando nuestros primeros pasos en programación utilizando el lenguaje php";

// Longitud de la cadena
echo "Longitud de la cadena " . $cadena . ": ". strlen($cadena) . "<br>";

// Primera ocurrencia de "os"
echo "Primera ocurrencia de 'os': " . strpos($cadena, 'os') . "<br>";

// Búsqueda de la palabra "nuestros"
echo "Búsqueda de la palabra 'nuestros': " . strpos($cadena, 'nuestros') . "<br>";

// Subcadena "lenguaje php"
echo "Subcadena 'lenguaje php': " . substr($cadena, strpos($cadena, 'lenguaje'), strlen('lenguaje php')) . "<br>";

// Subcadena "nuestros primeros pasos"
echo "Subcadena 'nuestros primeros pasos': " . substr($cadena, strpos($cadena, 'nuestros'), strpos($cadena, 'primeros') + strlen('primeros pasos') - strpos($cadena, 'nuestros')) . "<br>";

// Reemplazo de palabras
$cadena_reemplazada = str_replace(['estamos', 'nuestros'], ['estoy', 'mis'], $cadena);
echo "Reemplazo de palabras: " . $cadena_reemplazada . "<br>";

// Todas las letras en minúsculas
echo "Cadena en minúsculas: " . strtolower($cadena) . "<br>";

// Todas las letras en mayúsculas
echo "Cadena en mayúsculas: " . strtoupper($cadena) . "<br>";

// Todas las letras iniciales en mayúscula
echo "Cadena con letras iniciales en mayúscula: " . ucwords($cadena) . "<br>";

?>
