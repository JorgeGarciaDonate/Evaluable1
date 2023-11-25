<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

$msg = "";

if (isset($_REQUEST['btnEnviar'])) {
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername; dbname=alumnos", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM alumnos WHERE nombre=:nom;";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom', $_REQUEST['nombre']);
        $stmt->execute();
        $registros = $stmt->fetchAll(PDO::FETCH_ASSOC);

        //comprobamos si se han encontrado registros
        if (count($registros) > 0) {
            echo "<h2>Alumn@s encontrados que contienen el nombre" . $_REQUEST['nombre'] . "</h2>";
            echo "<ul>";
            foreach ($registros as $fila) {
                echo "<li>código: " . $fila["CODIGO"] . ", Nombre: " . $fila["NOMBRE"] .
                    " " . $fila["APELLIDOS"] . ", Teléfono: " . $fila["TELEFONO"] .
                    ", correo electrónico: " . $fila["CORREO"] . "</li>";
            }
            echo "</ul>";

        } else {
            $msg = "No se ha encontrado ningún alumno que contenga " . $_REQUEST['nombre'] . "en su nombre;";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar campos</title>
    <style>
        form {
            width: 30%;
        }
    </style>
</head>

<body>

    <h1>Buscar alumnos</h1>
    <p style="color:red;">
        <?=$msg?>
    </p>
    <form action="" method="post">
        
    <fieldset>
        <legend>Datos del alumno a buscar</legend>
        Nombre del alumno:
        <input type="text" name="nombre" required><br><br />
        <input type="submit" name="btnEnviar" value="Buscar">
    </fieldset>
    </form>

</body>

</html>

