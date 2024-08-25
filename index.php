<?php
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Laragon</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }
        </style>
    </head>
    <body>
      
          <?php
            $nombre = "Juan";
            $edad = 25;
            $altura = 1.75;
            $esEstudiante = true;

            echo "Nombre: $nombre<br>";
            echo "Edad: $edad<br>";
            echo "Altura: $altura<br>";
          echo "¿Es estudiante? " . ($esEstudiante ? "Sí" : "No");

          $nombre = "Juan";
          $edad = 25;

          // Concatenación usando el operador .
          $presentacion1 = "Hola, mi nombre es " . $nombre . " y tengo " . $edad . " años.";

          // Concatenación dentro de comillas dobles
          $presentacion2 = "Hola, mi nombre es $nombre y tengo $edad años.";

          // Definición de una constante
          define("SALUDO", "¡Bienvenido!");

          // Concatenación con constante
          $mensaje = SALUDO . " " . $nombre;

          echo $presentacion1 . "<br>";
          echo $presentacion2 . "<br>";
          echo $mensaje . "<br>";
         
          $nombre = "Juan";
          $edad = 25;

          // Usando echo
          echo "Hola, mundo!<br>";
          echo "Mi nombre es $nombre<br>";

          // Usando print
          print "Tengo $edad años<br>";

        // Usando printf (permite formateo)
        printf("Me llamo %s y tengo %d años<br>", $nombre, $edad);

        // Usando var_dump (útil para debugging)
        var_dump($nombre);
        echo "<br>";
          

          ?>
                        

        <div class="container">
            <div class="content">
                <div class="title" title="Laragon">Laragon</div>
     
                <div class="info"><br />
                      <?php print($_SERVER['SERVER_SOFTWARE']); ?><br />
                      PHP version: <?php print phpversion(); ?>   <span><a title="phpinfo()" href="/?q=info">info</a></span><br />
                      Document Root: <?php print ($_SERVER['DOCUMENT_ROOT']); ?><br />

                </div>
                <div class="opt">
                  <div><a title="Getting Started" href="https://laragon.org/docs">Getting Started</a></div>
                </div>
            </div>

        </div>
    </body>
</html>