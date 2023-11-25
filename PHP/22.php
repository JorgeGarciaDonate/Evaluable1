<!-- . Crear un array asociativo de dos dimensiones. La clave de la primera dimensión será el
código de empleado que tendrá el formato “CExxxx” donde xxxx es un número de 4
cifras.
La segunda dimensión contiene un array asociativo con claves “nombre”, “edad” y
“salario” cuyo contenido será el nombre, la edad y el salario del empleado.
Hacer una función en PHP que reciba como parámetros el nombre, la edad y el salario
de un empleado, y calcula un nuevo salario para esa persona en base a su situación:
o Si el salario es mayor de 2.000€, no cambiará.
o Si el salario está entre 1.000 y 2.000€:
▪ Si además la edad es mayor de 45 años se sube un 4%.
▪ Si la edad es menor o igual que 45 años se sube un 10%
o Si el salario es menor de 1.000€:
▪ Los menores de 30 años cobrarán a partir de entonces exactamente 1.500€.
▪ De 30 a 45 años sube un 3%.
▪ A los mayores de 45 años sube un 15%.
La función debe actualizar en el array los valores en caso de cambio y mostrar en
pantalla los nombres y el nuevo salario de los que han sufrido modificaciones. -->

<?php

// Crear el array asociativo de dos dimensiones
$empleados = array(
    'CExxxx1' => array('nombre' => 'Empleado1', 'edad' => 25, 'salario' => 1500),
    'CExxxx2' => array('nombre' => 'Empleado2', 'edad' => 35, 'salario' => 1800),
    'CExxxx3' => array('nombre' => 'Empleado3', 'edad' => 50, 'salario' => 2200)
);

// Función para calcular el nuevo salario
function calcularNuevoSalario(&$empleados, $codigo, $nombre, $edad, $salario) {
    //  condiciones y calcular el nuevo salario
    if ($salario > 2000) {
        // No cambia
    } elseif ($salario >= 1000 && $salario <= 2000) {
        if ($edad > 45) {
            $nuevoSalario = $salario * 1.04;
        } else {
            $nuevoSalario = $salario * 1.1;
        }
        //el nuevo salario
        $empleados[$codigo]['nombre'] = $nombre;
        $empleados[$codigo]['edad'] = $edad;
        $empleados[$codigo]['salario'] = $nuevoSalario;
        // cambios
        echo "Empleado $nombre: Nuevo salario - $nuevoSalario\n";
    } elseif ($salario < 1000) {
        if ($edad < 30) {
            $nuevoSalario = 1500;
        } elseif ($edad >= 30 && $edad <= 45) {
            $nuevoSalario = $salario * 1.03;
        } else {
            $nuevoSalario = $salario * 1.15;
        }
        // Actualizar el array con el nuevo salario
        $empleados[$codigo]['nombre'] = $nombre;
        $empleados[$codigo]['edad'] = $edad;
        $empleados[$codigo]['salario'] = $nuevoSalario;
        // Mostrar los cambios
        echo "Empleado $nombre: Nuevo salario - $nuevoSalario\n";
    }
}


calcularNuevoSalario($empleados, 'CExxxx1', 'NuevoEmpleado', 28, 1200);

// array actualizado
print_r($empleados);

?>
