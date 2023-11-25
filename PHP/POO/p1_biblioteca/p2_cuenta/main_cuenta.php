<?php 
include("cuenta.php");
// Crear instancias de la clase Cuenta
$cuenta1 = new Cuenta("Cliente1", "123456789", 0.05, 1000.0);
$cuenta2 = new Cuenta("Cliente2", "987654321", 0.03, 500.0);

// Ejemplo de uso
$cuenta1->ingreso(200);
$cuenta2->reintegro(100);

// Mostrar información de las cuentas
echo "Información de la cuenta 1:\n";
echo "Nombre del cliente: " . $cuenta1->getNombreCliente() . "\n";
echo "Número de cuenta: " . $cuenta1->getNumeroCuenta() . "\n";
echo "Tipo de interés: " . $cuenta1->getTipoInteres() . "\n";
echo "Saldo: " . $cuenta1->getSaldo() . "\n";

echo "\nInformación de la cuenta 2:\n";
echo "Nombre del cliente: " . $cuenta2->getNombreCliente() . "\n";
echo "Número de cuenta: " . $cuenta2->getNumeroCuenta() . "\n";
echo "Tipo de interés: " . $cuenta2->getTipoInteres() . "\n";
echo "Saldo: " . $cuenta2->getSaldo() . "\n";
?>