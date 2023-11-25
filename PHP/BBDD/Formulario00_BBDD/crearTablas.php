<?php
$tblDatos = null;
$servername = "localhost:3307";
$username = "root";
$password = "";
$sql=" ";
    try{
        $conn = new PDO("mysql:host=$servername; dbname=alumnos", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
        $sql = "CREATE TABLE PRUEBAS (CODIGO INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
         NOMBRE VARCHAR(30), TELEFONO INT UNSIGNED)";

        $conn->exec($sql);

        echo "Se ha creado la tabla correctamente";
    }
    catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }

    $conn = null;

?>