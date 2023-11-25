<!-- Realiza un programa en php que calcule el sueldo neto de un trabajador al cual se le
aplica una retención del 22%. Supón que el sueldo bruto son 2750€. Mostrar por
pantalla el sueldo inicial, el impuesto aplicado y el sueldo neto. Dar formato html a los
resultados obtenidos
-->
<!DOCTYPE html>
<html>
<head>
    <title>Calculadora de Sueldo Neto</title>
</head>
<body>
    <?php
    // Definir el sueldo bruto
    $sueldoBruto = 2750;

    // Calcular el impuesto (22%)
    $impuesto = $sueldoBruto * 0.22;

    // Calcular el sueldo neto
    $sueldoNeto = $sueldoBruto - $impuesto;
    ?>

    <h1>Calculadora de Sueldo Neto</h1>
    <p>Sueldo Bruto: <?php echo $sueldoBruto; ?> €</p>
    <p>Impuesto Aplicado: <?php echo $impuesto; ?> €</p>
    <p>Sueldo Neto: <?php echo $sueldoNeto; ?> €</p>
</body>
</html>