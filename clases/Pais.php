<?php

class Pais
{
    protected $nombre;
    protected $poblacion;
    protected $continente;
    protected $bandera;

    public function __construct($nombre, $poblacion, $continente, $bandera = "default.png") {
        $this->nombre = $nombre;
        $this->poblacion = $poblacion;
        $this->continente = $continente;
        $this->bandera = $bandera;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getPoblacion() {
        return $this->poblacion;
    }

    public function sePoblacion($poblacion) {
        $this->poblacion = $poblacion;
    }

    public function getBandera() {
        return $this->bandera;
    }

    public function setBandera($bandera) {
        $this->bandera = $bandera;
    }

    public function getContinente() {
        return $this->continente;
    }

    public function setContinente($continente) {
        $this->continente = $continente;
    }
}

?>