<?php
require_once 'Empresa.php';
require_once 'Gerente.php';
require_once 'Desarrollador.php';

$gerente1 = new Gerente("Arquimeds", 1, 5000, "Ventas");
$desarrollador1 = new Desarrollador("Javier", 2, 4000, "PHP", "Senior");
$desarrollador2 = new Desarrollador("Sofia", 3, 3500, "JavaScript", "Mid");

$empresa = new Empresa();

$empresa->agregarEmpleado($gerente1);
$empresa->agregarEmpleado($desarrollador1);
$empresa->agregarEmpleado($desarrollador2);

echo "<h2>Listado de Empleados:</h2>";
$empresa->listarEmpleados();

$nominaTotal = $empresa->calcularNominaTotal();
echo "<h2>Nomina Total:</h2>";
echo "Total: $" . number_format($nominaTotal, 2) . "<br>";

echo "<h2>Evaluaciones de Desempeño:</h2>";
$empresa->realizarEvaluaciones();
?>
