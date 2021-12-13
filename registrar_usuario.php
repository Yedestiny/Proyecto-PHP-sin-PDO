
<div>

    <form class="caja" method="POST" action="validar_nuevo_usuario.php">
    <?php 
        if(isset($_COOKIE['insertado'])){
            echo "Insertado con exito";
        }
        if(isset($_COOKIE['error'])){
            echo "Email ya en uso";
        }

    ?>

        <p class="centrado">Resgistrar usuario</p>
        <p>
            <label for="nombre_nuevo">Nombre</label>
            <input type="text" id="nombre_nuevo" name="nombre_nuevo">
        </p>

        <p>
            <label for="apellidos_nuevos">Apellidos</label>
            <input type="text" id="apellidos_nuevos" name="apellidos_nuevos">
        </p>

        <p>
            <label for="email_nuevo">Email</label>
            <input type="text" id="email_nuevo" name="email_nuevo">
        </p>

        <p>
            <label for="contraseña_nueva">Contraseña</label>
            <input type="password" id="contraseña_nueva" name="contraseña_nueva"> 
           
        </p>

        <p>
            <label for="fecha_nueva">Fecha</label>
            <input type="date" id="fecha_nueva" name="fecha_nueva">
        </p>

        <p><input type="submit" value="Registrar" id="registrar_nuevo"> <input type="reset" value="Limpiar" id="limpiar_nuevo"></p>

    </form>
</div>