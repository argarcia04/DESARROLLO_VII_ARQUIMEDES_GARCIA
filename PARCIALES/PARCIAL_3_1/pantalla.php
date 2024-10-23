<?php
session_start();

if (!isset($_SESSION['user'])) {
   header('Location: iniciar.php');
   exit();
}

$notas_estudiantes = [

        "arquimedes" => ["Logica" => 85, "Español" => 90, "Civica" => 78],
        "messi" => ["Logica" => 75, "Español" => 82, "Civica" => 88],
      


     
];


$is_profesor = $_SESSION['user'] === "profesor1";
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>UNIVERSIDAD TECNOLOGICA DE PANAMA</title>
</head>
<body>
   <h2>Bienvenido al sistema de Notas para sus estudiantes, estimado, <?php echo htmlspecialchars($_SESSION['user']); ?></h2>

   <?php if ($is_profesor): ?>
       <h3>Lista de Estudiantes y sus Notas</h3>
       <ul>
           <?php foreach ($notas_estudiantes as $estudiante => $notas): ?>
               <li>
                   <?php echo htmlspecialchars($estudiante); ?>
                   <ul>
                       <?php foreach ($notas as $asignatura => $nota): ?>
                           <li><?php echo $asignatura . ": " . $nota; ?></li>
                       <?php endforeach; ?>
                   </ul>
               </li>
           <?php endforeach; ?>
       </ul>
   <?php else: ?>
       <h3>Notas de sus Estudiante</h3>
       <ul>
           <?php foreach ($notas_estudiantes[$_SESSION['user']] as $asignatura => $nota): ?>
               <li><?php echo $asignatura . ": " . $nota; ?></li>
           <?php endforeach; ?>
       </ul>
   <?php endif; ?>

   <a href="salir.php">Cerrar Sesión</a>
</body>
</html>
