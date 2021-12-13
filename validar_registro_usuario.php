<?php
if (isset($_POST)) {
    $nombre_nuevo = isset($_POST['nombre_nuevo']) ? $_POST['nombre_nuevo'] : false;
    $apellidos_nuevo = isset($_POST['apellidos_nuevo']) ? $_POST['apellidos_nuevo'] : false;
    $email_nuevo = isset($_POST['email_nuevo']) ? $_POST['email_nuevo'] : false;
    $password_nuevo = isset($_POST['password_nuevo']) ? $_POST['password_nuevo'] : false;
}
// Array de errores
$errores = array();

// Validar apellidos

if (!empty($apellidos_nuevo) && !is_numeric($apellidos_nuevo) && !preg_match("/[0-9]/", $apellidos_nuevo)) {
    $apellidos_validado = true;
} else {
    $apellidos_validado = false;
    $errores['apellidos_nuevo'] = "Los apellidos no son validos";
}

// Validar email
if (!empty($email_nuevo) && filter_var($email_nuevo, FILTER_VALIDATE_EMAIL)) {
    $email_validado = true;
} else {
    $email_validado = false;
    $errores['email_nuevo'] = "El email no es valido";

}

$guardar_usuario = false;
if (count($errores) == 0) {
    $guardar_usuario = true;

} 



$servidorBD = "127.0.0.1";
$nombreDB = "proyecto";
$con = new mysqli($servidorBD, "angel", "angel", $nombreDB);
