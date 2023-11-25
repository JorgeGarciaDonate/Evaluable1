<?php
$msg = "";

if (isset($_REQUEST['codigo'])) {
    $servername = "localhost:3307";
    $username = "root";
    $password = "";
    try {
        $conn = new PDO("mysql:host=$servername; dbname=alumnos", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT CODIGO FROM alumnos WHERE codigo=:cod;";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':cod', $_REQUEST['codigo']);
        $stmt->execute();
        $registros = $stmt->fetch(PDO::FETCH_ASSOC);

        //comprobamos si se han encontrado registros
        if ($registros > 0) {
            $sql = "DELETE FROM ALUMNOS WHERE codigo=:cod;";
            $stmt = $conn->prepare($sql);
            $codigo = $_REQUEST['codigo'];
            $stmt->bindParam(':cod', $codigo);
            $stmt-> execute();
            $msg = "El alumn@ se ha borrado correctamente";

        } else {
            $msg = "El alumn@ a borrar no existe en la BD";
        }
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
} else {
    $msg = "Hay que introducir un codigo a borrar";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Borrar alumnos</title>
    <style>
        form {
            width: 30%;
        }
    </style>
</head>

<body>

    <h1>Borrar alumnos</h1>
    <p style="color:red;">
        <?= $msg ?>
    </p>
    <form action="" method="post">
    <fieldset>
        <legend>Datos del alumno a borrar</legend>
        Código del alumno:
        <input type="text" name="codigo" required><br><br />
        <input type="submit" name="btnEnviar" value="Borrar">
    </fieldset>
    </form>
</body>

</html>

