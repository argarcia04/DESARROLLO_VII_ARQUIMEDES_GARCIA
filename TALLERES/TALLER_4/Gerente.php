<?php
require_once 'Empleado.php';
require_once 'Evaluable.php';

class Gerente extends Empleado implements Evaluable {
    private $departamento;


    public function __construct($nombre, $idEmpleado, $salarioBase, $departamento) {
        parent::__construct($nombre, $idEmpleado, $salarioBase);
        $this->departamento = $departamento;
    }

    public function getDepartamento() {
        return $this->departamento;
    }

    public function setDepartamento($departamento) {
        $this->departamento = $departamento;
    }

    public function asignarBono($montoBono) {
        if ($montoBono > 0) {
            $this->salarioBase += $montoBono;
        } else {
            throw new Exception("El monto del bono debe ser positivo.");
        }
    }

    public function evaluarDesempenio() {

        return "Evaluación del desempeño del gerente: Buen desempeño en el area encargada " . $this->departamento;
    }

    public function mostrarInformacion() {
        return parent::mostrarInformacion() . " | Departamento: " . $this->departamento;
    }
}
?>
