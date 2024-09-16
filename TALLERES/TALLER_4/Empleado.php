<?php

class Empleado {
   
    private $nombre;
    private $idEmpleado;
    private $salarioBase;

    public function __construct($nombre, $idEmpleado, $salarioBase) {
        $this->nombre = $nombre;
        $this->idEmpleado = $idEmpleado;
        $this->salarioBase = $salarioBase;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getIdEmpleado() {
        return $this->idEmpleado;
    }

    public function setIdEmpleado($idEmpleado) {
        $this->idEmpleado = $idEmpleado;
    }

    public function getSalarioBase() {
        return $this->salarioBase;
    }

    public function setSalarioBase($salarioBase) {
        if ($salarioBase >= 0) {
            $this->salarioBase = $salarioBase;
        } else {
            throw new Exception("El salario base no puede ser negativo.");
        }
    }

     public function mostrarInformacion() {
        return "Nombre: " . $this->nombre . 
               " | ID: " . $this->idEmpleado . 
               " | Salario Base: $" . number_format($this->salarioBase, 2);
    }
}
?>
