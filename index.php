<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyecto sin poo</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body background="backgraund.jpg">
    <h1 class="titulo">Página de juegos por Angel Javier Bailon Gracia</h1>
    <!-- Menu -->
    <?php require_once("menu.php") ?>


    
    <div class="form_derecha">
        <?php 
            session_start();
      
            if(!isset($_SESSION['estado'])){
                //Iniciar sesion 
                require_once("iniciar_sesion.php");
                //Registrar usuario 
                require_once("registrar_usuario.php"); 
            }else{
                require_once("opciones_botones_login.php");
            }
        ?>

    </div>
    <br><br><br><br>
    <div class="principal">
    <?php 
           
      
            if(!isset($_SESSION['estado'])){
         
                require_once("texto_relleno.php");
 
            }else{
                require_once("vista_entradas.php");
            }
        ?>
    </div>


</body>

</html>