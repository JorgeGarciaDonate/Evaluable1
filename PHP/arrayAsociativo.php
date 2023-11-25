<?php

//Array indexado

$array = [ "Pepe","Juan", 0];
echo "Posición 0 : " . $array [0];
echo "Posición 3 : " . $array [2];

$array[9] =  "Pedro";
echo "Posición 9 : " . $array [9];

$array[] =  "Jesús";
echo "Posición 10 : " . $array [10];

//Ahora el asociativo

$paises = array ("España" => "Madrid", 
                    "Italia" => "Roma", 
                    "Grecia" => "Atenas" 
                    );

foreach ($paises as $clave => $valor){
    echo "Clave: " . $clave . "Valor: " . $valor . "<br>";
};

foreach ($paises as $valor){
    echo "Valor: " . $valor . "<br>";
};

echo "------------------------------------------------------ <br>";

$paises2 = array ("España" => array( "Madrid" => "Ofi1", 
                                "Salamanca" => "Ofi2"), 
                  "Suiza" => array( "Lausanne" => "Ofi3", 
                                "Zurich" => "Ofi4"),
                  "Irlanda" => array( "Dublín" => "Ofi5", 
                                "Cork" => "Ofi6"),  
);

foreach($paises2 as $clave => $valor){
    echo "<h1> $clave </h1>";
    foreach($valor as $ciudad => $oficina){
        echo "Ciudad: " . $ciudad . "Oficina: " . $oficina . "<br>";
    }
}

$listado2 = array ("Junior" => array("Nombre" => array("Jesús" , "Pepe"), 
                                     "DNI" => array ("1111" , "2222")), 
                   "Senior" => array("Nombre" => array("Mamen" , "Mari"), 
                                     "DNI" => array ("3333" , "4444")) 
                );

                foreach($listado2 as $clave => $valor){
                    echo "<h1> $clave </h1>";
                    foreach($valor as $nombre => $persona){
                        echo "Nombre: " . $nombre .  "<br>";
                    }
                }

?>

