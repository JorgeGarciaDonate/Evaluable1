<?php
$tblDatos = null;
$servername = "localhost:3307";
$username = "root";
$password = "";
$sql = "SELECT * FROM ALUMNOS";

try {
    $conn = new PDO("mysql:host=$servername; dbname=alumnos", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "<h2>Listado de la tabla alumnos</h2>";
    echo "<table>";
    echo "<tr><th>CÓDIGO</th><th>NOMBRE</th><th>APELLIDOS</th>
    <th>TELÉFONO</th><th>CORREO</th></tr>";
    foreach ($conn->query($sql) as $row) {
        echo "<tr><td>" . $row["CODIGO"] . "</td>
        <td>" . $row["NOMBRE"] . "</td>
        <td>" . $row["APELLIDOS"] . "</td>
        <td>" . $row["TELEFONO"] . "</td>
        <td>" . $row["CORREO"] . "</td></tr>";
    }
    echo "</table>";
    echo "<br><hr></br>";

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
?>