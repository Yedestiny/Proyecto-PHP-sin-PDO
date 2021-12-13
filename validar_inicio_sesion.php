<?php

function validar_email($email,$contraseña){
    $servidorBD = "127.0.0.1";
    $nombreDB = "proyecto";
    $con = new mysqli($servidorBD, "angel", "angel", $nombreDB);

    $comprobar_usuario = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$contraseña'";
    $buscar_usuario = mysqli_query($con,$comprobar_usuario);

    if ($buscar_usuario && mysqli_num_rows($buscar_usuario) >= 1){
        return true;
    }else{
        return false;
    }
}

function obtener_dato($email,$contraseña,$parametro){
    $servidorBD = "127.0.0.1";
    $nombreDB = "proyecto";
    $con = new mysqli($servidorBD, "angel", "angel", $nombreDB);
    $buscar_nombre = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$contraseña'";
    $valor= mysqli_query($con,$buscar_nombre)->fetch_assoc()[$parametro];
    return $valor;
}


$supuesto_email = $_POST['email'];
$supuesta_contraseña = $_POST['contraseña'];

if (validar_email($supuesto_email,$supuesta_contraseña)){
    session_start();
    $_SESSION['estado'] = 1;
    setcookie("nombre",obtener_dato($supuesto_email,$supuesta_contraseña,"nombre"),time()+3600);
    setcookie("apellidos",obtener_dato($supuesto_email,$supuesta_contraseña,"apellidos"),time()+3600);
    setcookie("email",obtener_dato($supuesto_email,$supuesta_contraseña,"email"),time()+3600);
    setcookie("password",obtener_dato($supuesto_email,$supuesta_contraseña,"password"),time()+3600);
    setcookie("fecha",obtener_dato($supuesto_email,$supuesta_contraseña,"fecha"),time()+3600);
   
    header('Location:index.php');
}else{
    header('Location:index.php');
}

?>



