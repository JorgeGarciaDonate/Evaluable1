<?php

//COMPROBAR SI EL FORMULARIO FUE ENVIADO
//(SI SE ENVIO AL PULSAR EL BOTON ENVIAR)

if(isset( $_GET['btnEnviar'])){
    
    echo " <p>Contenido del array asociativo con la información del " . "formulario:</p>";

    print_r( $_GET );

    echo "<p/>";
    echo "Primer numero: [".$_GET['txtPrimero']."]<br/>";
    echo "Segundo numero: [".$_GET['txtSegundo']."]<br/>";
    echo "<hr/>";

    $suma = $_GET['txtPrimero'] + $_GET['txtSegundo'];

    echo "La suma total es: " . $suma;

} else {
    echo "No hay nada en el formulario <br/>" ;
}

?>