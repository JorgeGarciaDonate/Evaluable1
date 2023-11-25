<!-- 24. Crear un array bidimensional asociativo en el que la clave de la primera dimensión será
el nombre de los equipos de la primera división de la liga de fútbol. Cada equipo
contendrá un array de dos elementos, el primero, con clave “puntos” contiene la
puntuación obtenida en la pasada liga. El segundo elemento con clave “posición”
contendrá en número la posición en la tabla en la que finalizó el equipo la liga.
Utilizando los bucles que necesites muestra en pantalla los nombres de los equipos, los
puntos y la posición de los equipos que terminaron en las tres primeras posiciones de la
liga. -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir los 3 primeros</title>
</head>

<body>
    <?php
    $aEquipos = array(
        "Real Madrid" => array("puntos" => 87, "posicion" => 1),
        "Villareal" => array("puntos" => 60, "posicion" => 5),
        "Celta de Vigo" => array("puntos" => 36, "posicion" => 17),
        "Ath. Bilbao" => array("puntos" => 51, "posicion" => 11),
        "RCD Espanyol" => array("puntos" => 25, "posicion" => 20),
        "Leganés" => array("puntos" => 33, "posicion" => 18),
        "Atlético de Madrid" => array("puntos" => 70, "posicion" => 3),
        "Getafe" => array("puntos" => 54, "posicion" => 8),
        "Alavés" => array("puntos" => 37, "posicion" => 16),
        "Sevilla" => array("puntos" => 70, "posicion" => 4),
        "Barcelona" => array("puntos" => 82, "posicion" => 2),
        "Real Sociedad" => array("puntos" => 56, "posicion" => 6),
        "Osasuna" => array("puntos" => 52, "posicion" => 10),
        "Granada" => array("puntos" => 56, "posicion" => 7),
        "Valencia C.F" => array("puntos" => 53, "posicion" => 9),
        "Levante" => array("puntos" => 49, "posicion" => 12),
        "Valladolid" => array("puntos" => 42, "posicion" => 13),
        "Betis" => array("puntos" => 39, "posicion" => 15),
        "RCD MAllorca" => array("puntos" => 25, "posicion" => 19),
        "Eibar" => array("puntos" => 42, "posicion" => 14)
    );

   // arrays separados para la posición y los puntos
$posiciones = array_column($aEquipos, 'posicion');
$puntos = array_column($aEquipos, 'puntos');
$nombres = array_keys($aEquipos);

// por posición (ascendente) y luego por puntos (descendente)
array_multisort($posiciones, SORT_ASC, $puntos, SORT_DESC, $nombres, $aEquipos);

// Resultados después de la ordenación
foreach ($aEquipos as $equipo => $datos) {
    echo $equipo . " - Posición: " . $datos['posicion'] . ", Puntos: " . $datos['puntos'] . "<br>";
}

    ?>

</body>

</html>