<!-- Realiza un programa en php que dados dos números calcule la suma, la resta, la
multiplicación, la división y el módulo y muestre los resultados obtenidos. El programa
debe cumplir los siguientes requisitos:
• La suma se realizará dentro del propio body
• La resta se realizará mediante una función en el head y se llamará desde el body sin
parámetros
• La multiplicación se realizará mediante una función en el head y se llamará desde el
body con parámetros (los valores de la multiplicación)
• La división y el módulo se realizarán en ficheros externos y se llamarán mediante
include. -->

<!DOCTYPE html>
<html>

<head>
    <title>Ejercicio 03</title>
    <?php

    global $numero_01;
    global $numero_02;

    $numero_01 = 10;
    $numero_02 = 2;

    function Resta()
    {
        global $numero_01, $numero_02;
        return $numero_01 - $numero_02;
    }
    ?>
    <?php
    function Multiplicacion($numero_01, $numero_02)
    {
        return $numero_01 * $numero_02;
    }
    ?>
</head>

<body>

    <h2>Operaciones</h2>

    <p>Suma:
        <?php echo $numero_01 + $numero_02; ?>
    </p>

    <p>Resta:
        <?php echo Resta(); ?>
    </p>

    <p>Multiplicación:
        <?php echo Multiplicacion($numero_01,  $numero_02); ?>
    </p>

    <?php
    include "03_archivo_externo.php";
    ?>

    <p>División:
        <?php echo $division; ?>
    </p>

    <p>Módulo:
        <?php echo $modulo; ?>
    </p>

</body>

</html>
