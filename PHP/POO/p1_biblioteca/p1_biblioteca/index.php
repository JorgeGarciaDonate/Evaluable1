<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Centro Educativo</title>
</head>
<body>

<?php

// Incluir las clases
include('ReadingMaterial.php');
include('Book.php');
include('Magazine.php');
include('Publisher.php');

// array de libros y revistas
$productos = array();

// objetos Publisher
$publisher = new Publisher('1', 'Editorial XYZ', 'Dirección de la editorial', '123456789', 'www.editorialxyz.com');

//  objetos Book y Magazine y añadirlos al array
$productos[] = new Book('101', 'Libro de Ejemplo', 120, 20.5, $publisher, '10', 'Autor Ejemplo');
$productos[] = new Magazine('201', 'Revista de Ejemplo', 30, 12.75, $publisher, 'Recursos adicionales de la revista');
$productos[] = new Book('102', 'Libro C', 150, 15.75, $publisher, '12', 'Autor C');
$productos[] = new Magazine('202', 'Revista A', 50, 8.99, $publisher, 'Nuevos recursos');
$productos[] = new Book('103', 'Libro B', 200, 25.0, $publisher, '15', 'Autor B');
$productos[] = new Magazine('203', 'Revista B', 40, 10.5, $publisher, 'Recursos premium');

// Mostrar info inicial
echo '<h2>Información Inicial</h2>';
mostrarInformacion($productos);

// Ordena por precio ascendente
bubbleSortByPriceAsc($productos);
echo '<h2>Ordenado por Precio Ascendente</h2>';
mostrarInformacion($productos);

// Ordena por precio descendente
bubbleSortByPriceDesc($productos);
echo '<h2>Ordenado por Precio Descendente</h2>';
mostrarInformacion($productos);

// Ordena alfabéticamente por título
sortByTitle($productos);
echo '<h2>Ordenado Alfabéticamente por Título</h2>';
mostrarInformacion($productos);

// Busca por autor
echo '<h2>Búsqueda por Autor</h2>';
$resultadoAutor = buscarPorAutor($productos, 'Autor C');
mostrarInformacion($resultadoAutor);

// Busca por título
echo '<h2>Búsqueda por Título</h2>';
$resultadoTitulo = buscarPorTitulo($productos, 'Libro B');
mostrarInformacion($resultadoTitulo);

// info de un array de productos de lectura
function mostrarInformacion($productos) {
    foreach ($productos as $producto) {
        echo '<h3>' . get_class($producto) . '</h3>';
        echo '<p>ID: ' . $producto->getId() . '</p>';
        echo '<p>Título: ' . $producto->getTitle() . '</p>';
        echo '<p>Páginas: ' . $producto->getPages() . '</p>';
        echo '<p>Precio: $' . $producto->getPrice() . '</p>';
        echo '<p>Editorial: ' . $producto->getEditor()->getName() . '</p>';
        echo '<hr>';
    }
}

// ordenar usando BubbleSort por precio ascendente
function bubbleSortByPriceAsc(&$productos) {
    $n = count($productos);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($productos[$j]->getPrice() > $productos[$j + 1]->getPrice()) {
                $temp = $productos[$j];
                $productos[$j] = $productos[$j + 1];
                $productos[$j + 1] = $temp;
            }
        }
    }
}

// ordenar usando BubbleSort por precio descendente
function bubbleSortByPriceDesc(&$productos) {
    $n = count($productos);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($productos[$j]->getPrice() < $productos[$j + 1]->getPrice()) {
                $temp = $productos[$j];
                $productos[$j] = $productos[$j + 1];
                $productos[$j + 1] = $temp;
            }
        }
    }
}

// ordenar por título alfabético
function sortByTitle(&$productos) {
    usort($productos, function ($a, $b) {
        return strcmp($a->getTitle(), $b->getTitle());
    });
}

// bbuscar por autor
/* La función stripos en PHP es similar a strpos, 
pero es insensible a mayúsculas y minúsculas 
(no distingue entre mayúsculas y minúsculas). 
Ambas funciones se utilizan para encontrar la primera 
aparición de una subcadena dentro de otra cadena. */

function buscarPorAutor($productos, $autor) {
    $resultado = array_filter($productos, function ($producto) use ($autor) {
        if ($producto instanceof Book && stripos($producto->getAuthors(), $autor) !== false) {
            return true;
        } elseif ($producto instanceof Magazine && stripos($producto->getAdditionalResources(), $autor) !== false) {
            return true;
        }
        return false;
    });

    return array_values($resultado);
}

// buscar por título
function buscarPorTitulo($productos, $titulo) {
    $resultado = array_filter($productos, function ($producto) use ($titulo) {
        return stripos($producto->getTitle(), $titulo) !== false;
    });

    return array_values($resultado);
}

?>

</body>
</html>
