<?php
class Cuenta
{
    private $nombreCliente;
    private $numeroCuenta;
    private $tipoInteres;
    private $saldo;

    public function __construct($nombreCliente, $numeroCuenta, $tipoInteres, $saldo)
    {
        $this->nombreCliente = $nombreCliente;
        $this->numeroCuenta = $numeroCuenta;
        $this->tipoInteres = $tipoInteres;
        $this->saldo = $saldo;
    }

    // Métodos getters
    public function getNombreCliente()
    {
        return $this->nombreCliente;
    }

    public function getNumeroCuenta()
    {
        return $this->numeroCuenta;
    }

    public function getTipoInteres()
    {
        return $this->tipoInteres;
    }

    public function getSaldo()
    {
        return $this->saldo;
    }

    // Métodos setters
    public function setNombreCliente($nombreCliente)
    {
        $this->nombreCliente = $nombreCliente;
    }

    public function setNumeroCuenta($numeroCuenta)
    {
        $this->numeroCuenta = $numeroCuenta;
    }

    public function setTipoInteres($tipoInteres)
    {
        $this->tipoInteres = $tipoInteres;
    }

    public function setSaldo($saldo)
    {
        $this->saldo = $saldo;
    }

    // Método de ingreso
    public function ingreso($cantidad)
    {
        if ($cantidad > 0) {
            $this->saldo += $cantidad;
            return true;
        } else {
            return false;
        }
    }

    // Método de reintegro
    public function reintegro($cantidad)
    {
        if ($cantidad > 0 && $cantidad <= $this->saldo) {
            $this->saldo -= $cantidad;
            return true;
        } else {
            return false;
        }
    }
}

?>
