<!-- 20. Haz un programa que muestre 2000 cuadrados de colores aleatorios que además se
coloquen en posiciones aleatorias por la pantalla.
• El tamaño de los cuadrados será 50x50 píxeles.
• Las posiciones aleatorias se calcularán entre 0 y 100 que representa el porcentaje
(0% -100%) para posiciones absolutas, relativa, o fixed de los atributos left y top
de los cuadrados.
• Los colores aleatorios se calculan obteniendo un número aleatorio entre 0 y 255
para cada valor RGB. -->

<!DOCTYPE html>
<html>
<head>
    <style>
        .cuadrado {
            width: 50px;
            height: 50px;
            position: absolute;
        }
      
    </style>
</head>
<body>
    <?php
    for ($i = 0; $i < 2000; $i++) {
        $left = rand(0, 100) . '%'; // Posición aleatoria izquierda
        $top = rand(0, 100) . '%';  // Posición aleatoria arriba
        $r = rand(0, 255);  // Valor aleatorio para el componente rojo
        $g = rand(0, 255);  // Valor aleatorio para el componente verde
        $b = rand(0, 255);  // Valor aleatorio para el componente azul

        $color = "rgb($r, $g, $b)"; // Color aleatorio

        echo "<div class='cuadrado' style='left: $left; top: $top; background-color: $color;'></div>";
    }
    ?>
</body>
</html>
