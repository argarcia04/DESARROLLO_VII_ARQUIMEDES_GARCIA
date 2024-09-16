<?php
require_once 'Empleado.php';
require_once 'Evaluable.php';

class Desarrollador extends Empleado implements Evaluable {
    private $lenguajePrincipal;
    private $nivelExperiencia;

    public function __construct($nombre, $idEmpleado, $salarioBase, $lenguajePrincipal, $nivelExperiencia) {
        parent::__construct($nombre, $idEmpleado, $salarioBase);
        $this->lenguajePrincipal = $lenguajePrincipal;
        $this->nivelExperiencia = $nivelExperiencia;
    }

    public function getLenguajePrincipal() {
        return $this->lenguajePrincipal;
    }

    public function setLenguajePrincipal($lenguajePrincipal) {
        $this->lenguajePrincipal = $lenguajePrincipal;
    }

    public function getNivelExperiencia() {
        return $this->nivelExperiencia;
    }

    public function setNivelExperiencia($nivelExperiencia) {
        $this->nivelExperiencia = $nivelExperiencia;
    }

    public function evaluarDesempenio() {
        return "Evaluación del desempeño del desarrollador:  Maneja a la perfeccion " . $this->lenguajePrincipal . " con nivel de experiencia " . $this->nivelExperiencia;
    }

    public function mostrarInformacion() {
        return parent::mostrarInformacion() . 
               " | Lenguaje Principal: " . $this->lenguajePrincipal . 
               " | Nivel de Experiencia: " . $this->nivelExperiencia;
    }
}
?>
