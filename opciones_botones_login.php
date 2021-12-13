<div style="background-color: rgb(238, 179, 164);padding: 10px;">

    <?php echo "<p><h1>Bienvenido,<br> " . $_COOKIE['nombre'] . " ".$_COOKIE['apellidos']. " </h1></p>" ?>
    
    <a href="form_crear_nueva_entrada.php"><button type="submit" name="crear_entrada" value="Crear entrada" style="margin-left: 20px;width: 250px; height: 100px; margin-top: 25px; background-color:blueviolet;border: 0px; border-radius: 30%;"> Crear Entradas </button> </a> <br>
    <a href="#"><button type="submit" name="crear_categoria" value="Crear categoria" style="margin-left: 20px;width: 250px; height: 100px; background-color: blue;border: 0px; border-radius: 10%;"> Crear Categorias </button> </a> <br>
    <a href="mostrar_datos.php"><button type="submit" name="mis_datos" value="Mis datos" style="margin-left: 20px;width: 250px; height: 100px; background-color:chartreuse;border: 0px; border-radius: 10%;"> Mis datos </button> </a> <br>
    <a href="cerrar_sesion.php"> <button type="submit" name="cerrar_sesion" value="Cerrar sesion" style="margin-left: 20px;width: 250px; height: 100px; background-color:darkgoldenrod;border: 0px; border-radius: 10%;">Cerrar Sesion </button> </a> <br>

</div>