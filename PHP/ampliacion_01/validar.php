<!-- Crear una página web que pida NIE. Después, crea otra página que lo valide de la siguiente
forma:
• El DNI tiene que cumplir las siguientes reglas de los DNI españoles: 8 números y una
letra. Pero se puede especificar también un NIE en cuyo caso consta de una letra (solo
puede ser X, Y o Z) y 7 números más una letra final. La letra final del DNI cumple esta
fórmula: los números se dividen entre 23 y se toma el resto. El resto se sustituye por
una letra siguiendo el siguiente patrón:
• En el caso de los NIE para calcular la letra final se hace lo mismo, pero sustituyendo la
letra inicial por 0 si es una X, por 1 si es una Y y por 2 si es una Z.
• Deberá mostrarse si el NIE introducido es correcto o no.
Nota: Investiga la función preg_match e intenta utilizar expresiones regulares para la
validación -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Validación</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Obtener el NIE del formulario
        $nie = strtoupper($_POST["nie"]); // Convertir todo a mayúsculas para simplificar la validación

        echo "<p>Valor del NIE: $nie</p>"; // Mostrar el valor del NIE para depuración

        // Validar el formato del NIE o DNI con expresiones regulares
        if (preg_match('/^[XYZ]?\d{7}[TRWAGMYFPDXBNJZSQVHLCKE]$/i', $nie) || preg_match('/^\d{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i', $nie)) {
            // Extraer la letra final del NIE o DNI
            $letra_final = substr($nie, -1);

            // Obtener los números del NIE o DNI
            $numeros = intval(substr($nie, 0, -1));

            // Definir el patrón de letras para el cálculo del resto
            $letras = 'TRWAGMYFPDXBNJZSQVHLCKE';

            // Calcular el resto
            $resto = $numeros % 23;

            // Verificar si la letra final es la correcta
            if ($letra_final === $letras[$resto]) {
                echo "<p>El NIE o DNI introducido es válido.</p>";
            } else {
                echo "<p>El NIE o DNI introducido no es válido.</p>";
            }
        } else {
            echo "<p>Formato de NIE o DNI incorrecto.</p>";
        }
    } else {
        echo "<p>Acceso no permitido.</p>";
    }
    ?>
</body>
</html>
