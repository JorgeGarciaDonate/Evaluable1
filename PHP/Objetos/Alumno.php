<?php
include "Persona.php";
class Alumno extends Persona {

    //variables
    private $nombre;
    public $apellido;
    const CICLO = "Daw";
    public static $id = 409;

    //constructor
    function __construct($nom, $ape)
    {
        parent::__construct($nom,$ape);
        $this->ies = "CE";
        $this->nota = 9;
    }

    //funcion
    function datosAlumno() {
        $str=  "Los datos del alumno " . $this->nombre . " " . $this->apellido . " y pertenece al curso de " . self::CICLO;
        $str = " estudia en el IES " . $this->ies
        return $str;   
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

    public function __get($propiedad){   
                return $this->$propiedad;
    }

    public function __set($propiedad, $valor){
            $this->$propiedad = $valor;
    }
}
?>