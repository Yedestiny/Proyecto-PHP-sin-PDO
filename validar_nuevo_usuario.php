<?php

function validar_email($email){
    $servidorBD = "127.0.0.1";
    $nombreDB = "proyecto";
    $con = new mysqli($servidorBD, "angel", "angel", $nombreDB);

    $comprobar_usuario = "SELECT * FROM usuarios WHERE email = '$email'";
    $buscar_email = mysqli_query($con,$comprobar_usuario);

    if ($buscar_email && mysqli_num_rows($buscar_email) >= 1){
        return false;
    }else{
        return true;
    }
}

function insertar_usuario($nombre,$apellidos,$email,$contraseña,$fecha){
    $servidorBD = "127.0.0.1";
    $nombreDB = "proyecto";
    $con = new mysqli($servidorBD, "angel", "angel", $nombreDB);
    $insert = "INSERT INTO usuarios (nombre,apellidos,email,password,fecha) VALUES ('$nombre','$apellidos','$email','$contraseña','$fecha')";
    $con->query($insert);

}



$nombre_nuevo = $_POST['nombre_nuevo'];
$apellidos_nuevos = $_POST['apellidos_nuevos'];
$email_nuevo = $_POST['email_nuevo'];
$contraseña_nueva = $_POST['contraseña_nueva'];
$fecha_nueva = $_POST['fecha_nueva'];

if (validar_email($email_nuevo)){
    insertar_usuario($nombre_nuevo,$apellidos_nuevos,$email_nuevo,$contraseña_nueva,$fecha_nueva);
    setcookie("insertado",1,time()+10);
    header('Location: index.php');
}else{
    setcookie("error",1,time()+10);
    header('Location: index.php');
}

?>