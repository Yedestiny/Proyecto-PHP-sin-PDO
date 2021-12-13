<h1>Entradas</h1> <br> <br>

<?php

$servidorBD = "127.0.0.1";
$nombreDB = "proyecto";
$con = new mysqli($servidorBD, "angel", "angel", $nombreDB);
$sql = "SELECT titulo,descripcion FROM entradas";

$result = mysqli_query($con, $sql);
$fila = mysqli_fetch_array($result, MYSQLI_NUM);

do {
    $datos[] = $fila;
} while ($fila = mysqli_fetch_array($result, MYSQLI_NUM));


foreach($datos as $pelicula){
    echo "<h1>".$pelicula[0]."</h1><br>";
    echo "<article>".$pelicula[1]."</article><br><br>";
}

?>