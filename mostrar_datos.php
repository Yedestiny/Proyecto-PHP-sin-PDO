<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body background="backgraund.jpg">
    
</body>
</html>


<div style="width: 300px; background-color: rgb(238, 179, 164);padding: 20px;margin-left: 800px;margin-top: 200px;">
<?php
echo "<h1>Mis Datos</h1>";
echo "<h3>";
echo "Nombre: ".$_COOKIE['nombre'] . "<br> <br> ";
echo "Apellidos: ".$_COOKIE['apellidos'] . "<br><br>  ";
echo "Email: ".$_COOKIE['email'] . " <br><br> ";
echo "Contraseña: ".$_COOKIE['password'] . "<br> <br> ";
echo "Fecha: ".$_COOKIE['fecha'] . " <br><br> <br> ";
echo "<a href='index.php'> <button>Regresar a la pagina de inicio</button></a>";
echo "</h3>";
?>
</div>



