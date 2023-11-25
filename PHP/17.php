<!-- Crea un array asociativo que contenga la siguiente información:
Array supermercado:
Fruta (Pera, Manzana, Plátano)
Verdura (Berenjena, Calabacín)
Lácteos (leche, yogur, queso, kéfir)
Muestra el array en pantalla haciendo uso del bucle foreach
 -->
<?php

$supermercado = array(
    "Fruta" => array("Pera", "Manzana", "Plátano"),
    "Verdura" => array("Berenjena", "Calabacín"),
    "Lácteos" => array("leche", "yogur", "queso", "kéfir")
);

foreach ($supermercado as $categoria => $productos) {
    echo "<strong>$categoria:</strong><br>";

    foreach ($productos as $producto) {
        echo "- $producto<br>";
    }

    echo "<br>";
}

?>
