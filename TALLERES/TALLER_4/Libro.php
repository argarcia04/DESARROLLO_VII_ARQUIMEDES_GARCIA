<?php
require_once 'Prestable.php';

class Libro implements Prestable {
    private $titulo;
    private $autor;
    private $anio;
    private $disponible = true;

    // Constructor que acepta título, autor y año
    public function __construct($titulo, $autor, $anio) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anio = $anio;
    }

    // Método para prestar el libro
    public function prestar() {
        if ($this->disponible) {
            $this->disponible = false;
            return true;
        }
        return false;
    }

    // Método para devolver el libro
    public function devolver() {
        $this->disponible = true;
    }

    // Método para verificar si el libro está disponible
    public function estaDisponible() {
        return $this->disponible;
    }

    // Método para obtener la información del libro
    public function obtenerInformacion() {
        return "{$this->titulo} por {$this->autor}, publicado en {$this->anio}";
    }
}

// Ejemplo de uso
$libro = new Libro("Rayuela", "Julio Cortázar", 1963);
echo $libro->obtenerInformacion() . "\n";
echo "Disponible: " . ($libro->estaDisponible() ? "Sí" : "No") . "\n";

$libro->prestar();
echo "Disponible después de prestar: " . ($libro->estaDisponible() ? "Sí" : "No") . "\n";

$libro->devolver();
echo "Disponible después de devolver: " . ($libro->estaDisponible() ? "Sí" : "No") . "\n";
