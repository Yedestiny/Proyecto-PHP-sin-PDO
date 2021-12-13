<?php 
function insertar_entrada($titulo,$descripcion,$fecha){
    $servidorBD = "127.0.0.1";
    $nombreDB = "proyecto";
    $con = new mysqli($servidorBD, "angel", "angel", $nombreDB);
    $insert = "INSERT INTO entradas (usuario_id,categoria_id,titulo,descripcion,fecha) VALUES (1,1,'$titulo','$descripcion','$fecha')";
    $con->query($insert);

}

$nuevo_titulo = $_POST['titulo'];
$nueva_descripcion = $_POST['descripcion'];
$nueva_fecha = $_POST['fecha'];
insertar_entrada($nuevo_titulo,$nueva_descripcion,$nueva_fecha);
header('Location:index.php');

?>