<?php
include "Alumno.php";

/* $alumno = new Alumno("Paco", "Pérez");

echo $alumno->datosAlumno();

echo "<br>--------------------------<br>";
echo "Apellido " . $alumno->apellido;
echo "<br>--------------------------<br>";
echo "nombre " . $alumno->getNombre();

echo "<br>--------------------------<br>";
echo "Soy del ciclo  " . Alumno::CICLO;

echo "<br>--------------------------<br>";
echo $alumno;

echo "<br>--------------------------<br>";
$alumno->nombre="Juan";
echo $alumno;
echo "<br>--------------------------<br>"; */

$alumno1 = new Alumno("Antonio", "Recio");
$alumno2 = new Alumno("Pepe", "Viyuela");
$alumno3 = new Alumno("Mauricio", "Colmenero");
$alumno4 = new Alumno("Amador", "Rivas");

$alumnos = array($alumno1, $alumno2, $alumno3, $alumno4);
foreach ($alumnos as $alumno) {
    echo "Nombre: " . $alumno->getNombre() . "<br>";
    echo "Apellido: " . $alumno->getApellido() . "<br>";
    echo "ID: " . Alumno::$id;
    echo "<br>--------------------------<br>";
}

?>



















<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla</title>
</head>

<body>

</body>

</html>