<?php
$servername = "localhost:3307";
$username = "root";
$password = "";

/* function nuevoAlumno($firstname, $lastname, $phone, $email)
{
   
    echo "Nuevo alumno creado.\n";

} */

try {
    $conn = new PDO("mysql:host=$servername; dbname=alumnos", $username, $password);
    // set de PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected succesfully";

    // preparar el sql y cerrar los parámetros
    $stmt = $conn->prepare("INSERT INTO alumnos (nombre, apellidos, telefono, correo)
    VALUES (:firstname, :lastname, :phone, :email)");

    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':email', $email);

    //Insertar un nuevo registro en la tabla
    $firstname = "Jorge";
    $lastname = "Garcia Donate";
    $phone = "123456789";
    $email = "hola@gmail.com";

    $stmt->execute();

    echo "New records created successfully. \n";

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$conn = null;

?>