<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manejo de ficheros</title>
</head>

<body>
    <p>Operación de lectura</p>
    <?php
    $archivo = fopen("fichero1.txt", "r+b");
    if ($archivo) {
        echo "Error al abrir el fichero";
    }

    $cadena1 = fread($archivo, 4);
    echo $cadena1;
    echo "<br>---------------------------</br>";
    fwrite($archivo, "No estás escuchando y mira que es fácil");
    rewind($archivo);
    $cadena2 = fread($archivo, filesize("fichero1.txt"));
    echo $cadena2;

    ?>

    <p>Almacenamiento en array</p>
    <?php
    $array = file("fichero1.txt");
    print_r($array);
    ?>

    <p>Lectura por líneas</p>
    <?php
    $archivo2 = fopen("fichero1.txt", "r+b");
    if ($archivo2) {
        echo "Error al abrir el archivo";
    }

    while (feof($archivo2) == false) {
        fgets($archivo2) . "</br>";
    }
    ?>

    <!-- utilizar fgets csv o algo asi -->
    <!-- conectar bbdd
         select 
         cargar en fichero -->
</body>

</html>