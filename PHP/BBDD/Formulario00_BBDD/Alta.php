<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <h1>Alta de alumnos</h1>

    <form action="" method="post">
        <fieldset>
            <legend>Datos del alumno</legend>
            Nombre del alumno:
            <input type="text" name="nombre" required><br></br>
            Apellidos del alumno:
            <input type="text" name="apellidos" required><br></br>
            Telefono del alumno:
            <input type="text" name="telefono" required><br></br>
            E-mail del alumno:
            <input type="text" name="correo" required><br></br>
            <input type="submit" name="btnEnviar" value = "Dar de alta">
        </fieldset>
    
</body>
</html>

<?php
$tblDatos = null;
$servername = "localhost:3307";
$username = "root";
$password = "";
$sql=" ";
if(isset($_REQUEST['btnEnviar'])){
    try{
        $conn = new PDO("mysql:host=$servername; dbname=alumnos", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "INSERT INTO alumnos (nombre, apellidos, telefono, correo)"
        . "VALUES (:nom, :ape, :tel, :cor)";

        $stmt = $conn->prepare($sql);
        $stmt->bindParam(':nom',$_REQUEST['nombre'] );
        $stmt->bindParam(':ape',$_REQUEST['apellidos'] );
        $stmt->bindParam(':tel', $_REQUEST['telefono'] );
        $stmt->bindParam(':cor', $_REQUEST['correo'] );
        $stmt->execute();

        echo "Se ha dado de alta al alumno";
    }
    catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    $conn = null;
}
?>