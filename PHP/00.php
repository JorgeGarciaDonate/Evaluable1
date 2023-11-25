<html >
<head>
<?php

function calcularEdad($edad) {
    return $edad + 10;
}
?>

</head>
<body>

<?php
$edad = 25;
const DNI = "06028448X";
$nombre = "Jorge ";
$apellidos = "Garcia Donate";
echo " Hola ".  $nombre . $apellidos;
echo " Tiene $edad ";
  
?>

<p> Voy a calcular tu edad mas 10 años : <?= calcularEdad($edad); ?> </p>
<p> Voy a calcular tu edad mas 10 años : <?= calcularEdad($edad > 30) ?"Soy mayor" : "Soy menor" ;  ?> </p>

</body>
</html>