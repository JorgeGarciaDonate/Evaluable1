<?php

class Persona {

    //variables
    private $ies;
    public $nota;
    const CICLO = "Daw";
    public static $id = 409;

    //constructor
    function __construct($ies, $nota)
    {
        $this->ies = $ies;
        $this->nota = $nota;
    }

    //funcion
    function datosAlumno() {
        return "Los datos del alumno " . $this->nombre . " " . $this->apellido;
    }

    //get y set
    function getNombre() {
        return  $this->nombre;
    }

    function getApellido() {
        return  $this->apellido;
    }

    function getId() {
        return  $this->id;
    }

    function setNombre($nom) {
        $this->nombre = $nom;
    }

    //metodos mágicos
    public function __toString() {
    return self::class . ": " . $this->nombre . " " . $this->apellido. " " . $this->id;
    }

    /* public function __get($property){
        if(property_exists($this, $property)) {
            return $this->$property;
        } else return "No existe";
    } */
/* 
    public function __set($property, $value){
        if(property_exists($this, $property)) {
            $this->$property = $value;
        } else echo "No existe";
    } */

    function __set($nom, $val1) {
        $this->$nom = $val1;
    }

    function __get($nombre) {
        return $this->$nombre;
    }
}


?>