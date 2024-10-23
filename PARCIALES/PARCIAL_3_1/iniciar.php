<?php
session_start();

$users = [
   "profesor1" => "1234aaa",
   "arquimedes" => "lorenzo",
   "messi" => "abcd1234"
 
];

$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
   $username = $_POST['username'];
   $password = $_POST['password'];

   if (strlen($username) < 3 || !ctype_alnum($username)) {
       $errors[] = "El nombre de usuario debe tener al menos 3 caracteres y solo letras/números.";
   }


   if (strlen($password) < 5) {
       $errors[] = "La contraseña debe tener al menos 5 caracteres.";
   }

   if (empty($errors) && isset($users[$username]) && $users[$username] === $password) {
 
       $_SESSION['user'] = $username;

      
       header('Location: pantalla.php');
       exit();
   } else {
       $errors[] = "Credenciales incorrectas.";
   }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
   <meta charset="UTF-8">
   <title>Inicio de Sesión</title>
</head>
<body>
   <h2>Inicio de Sesión</h2>
   <?php if ($errors): ?>
       <ul>
           <?php foreach ($errors as $error): ?>
               <li><?php echo $error; ?></li>
           <?php endforeach; ?>
       </ul>
   <?php endif; ?>

   <form method="POST" action="">
       <label for="username">Nombre de usuario:</label>
       <input type="text" name="username" required><br>

       <label for="password">Contraseña:</label>
       <input type="password" name="password" required><br>

       <input type="submit" value="Iniciar Sesión">

       <label for="username">use los usuarios sig"</label>
       

       <label for="username">usarname: arquimedes, password: lorenzo ... estudiante"</label>
       <label for="username">"usarname: messi, password: abcd1234 ... estudiante"</label>
       <label for="username">"usarname: profesor1, password: 1234aaa ... profesor"</label>


   </form>
</body>
</html>