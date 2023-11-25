<!-- 1. Crea una pequeña agenda electrónica utilizando arrays asociativos multidimensionales.
Los datos a guardar para cada contacto son: nombre, apellidos, teléfono, correo
electrónico.
Debe mostrarse en pantalla los datos guardados en la agenda. Ejemplo:
Crea una función de usuario que reciba el correo electrónico de cada contacto de la
agenda que devuelva true si el correo termina en “@gmail.com”, “@educa.madrid.org”,
“@yahoo.com” o “@hotmail.com” y false en caso contrario.
Mostrar en pantalla una lista con los nombres y correo electrónico de los correos no
válidos. -->
<?php

$agenda = array(
    "contacto1" => array(
        "nombre" => "Juan",
        "apellidos" => "Pérez",
        "telefono" => "123456789",
        "correo" => "juan@gmail.com"
    ),
    "contacto2" => array(
        "nombre" => "María",
        "apellidos" => "López",
        "telefono" => "987654321",
        "correo" => "maria@educa.madrid.org"
    ),
    "contacto3" => array(
        "nombre" => "Carlos",
        "apellidos" => "García",
        "telefono" => "555555555",
        "correo" => "carlos@yahoo.com"
    ),
    "contacto4" => array(
        "nombre" => "Laura",
        "apellidos" => "Martínez",
        "telefono" => "666666666",
        "correo" => "laura@hotmail"
    ),
);

// Función para verificar la validez del correo con formato específico
function esCorreoValido($correo)
{
    // Verificar si el correo tiene un formato específico con un arroba seguido de al menos un carácter, un punto y al menos otro carácter
    return filter_var($correo, FILTER_VALIDATE_EMAIL) && preg_match('/@.+?\..+/', $correo);
}


// Mostrar datos de la agenda en una tabla
echo "<table border='1'>";
echo "<tr><th>Contacto</th><th>Campo</th><th>Valor</th></tr>";

foreach ($agenda as $contacto => $campos) {
    echo "<tr>";
    echo "<td rowspan='" . count($campos) . "'>$contacto</td>";

    foreach ($campos as $campo => $valor) {
        echo "<td>$campo</td>";
        echo "<td>$valor</td>";
        echo "</tr><tr>"; // Nueva fila para el siguiente campo
    }
}

echo "</table>";

// Mostrar lista de correos no válidos
echo "<strong>Correos no válidos:</strong><br>";
foreach ($agenda as $contacto => $campos) {
    foreach ($campos as $campo => $valor) {
        if ($campo == "correo" && !esCorreoValido($valor)) {
            echo "$contacto: $valor<br>";
        }
    }
}

?>
