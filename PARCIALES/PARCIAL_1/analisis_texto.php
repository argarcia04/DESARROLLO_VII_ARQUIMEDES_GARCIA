<?php
include 'utilidades_texto.php';

//ingresamos la frase
$frases = [
    "HOLA MUNDO.",
    "PANAMA PARA EL MUNDO",
    "HOLA MI NOMBRE ES ARQUIMEDES",
    "JURALO SIEMPRE",
    
];
// tabla
echo "<table border='2'>";
echo "<tr><th>Esta es la frase</th>";
echo"<th>catidad de vocales</th>";
echo "<th>catidad de palabras</th>";
echo "<th> Invertidas</th></tr>";

foreach ($frases as $frase) {
    $cant_palabras = contar_palabras($frase);
    $cant_vocales = contar_vocales($frase);
    $frase_invertida = invertir_palabras($frase);

    echo "<tr>";
    echo "<td>{$frase}</td>";
    echo "<td>{$cant_palabras}</td>";
    echo "<td>{$cant_vocales}</td>";
    echo "<td>{$frase_invertida}</td>";
    echo "</tr>";
    echo "la frase $frase tiene $cant_palabras  palabras en la frase  y la frase $frase tiene $cant_vocales de vocales la $frase invertida seria $frase_invertida invertida";
}

echo "</table>";
?>
