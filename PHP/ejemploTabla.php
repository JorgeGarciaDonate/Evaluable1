<?php

    //Array que contiene nuestros datos, imaginate que es una base de datos o similar...
    $data = [
        [
            'name' => 'Leire',
            'surname' => 'Bravo',
            'note' => 5.5,
        ],
        [
            'name' => 'Ainara',
            'surname' => 'Feijoo',
            'note' => 6.5,
        ],
        [
            'name' => 'Nancy',
            'surname' => 'Tomas',
            'note' => 4.5,
        ],
        
    ];
?>

<html>
    <body>
        <h1>Notas alumnos</h1>
        <table border="1">
            <tr>
                <th>Nombre alumno</th>
                <th>Apellidos</th>
                <th>Nota</th>
            </tr>

            <?php

                $concat = '';

                foreach ($data as $student) {

                    //Concatenamos las tablas en una variable, también podriamos hacer el "echo" directamente
                    $concat .= '<tr>';
                    $concat .= '<td>' . $student['name'] .'</td>';
                    $concat .= '<td>' . $student['surname'] .'</td>';

                    //Number format es únicamente para reemplazar el punto por la coma que se utiliza en europa para los decimales. 
                    $concat .= '<td>' . number_format($student['note'], 2, ',','.') .'</td>';
                    $concat .= '</tr>';
                }

                echo $concat;
            ?>

        </table>
    </body>
</html>