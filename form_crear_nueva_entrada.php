<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body background="backgraund.jpg">
    <div style="background-color: rgb(238, 179, 164); margin-left: 700px;margin-top: 30px; width: 500px;padding: 20px;">
    <h1>Crear Entrada</h1>
        <form action="crear_nueva_entrada.php" method="POST">
            <h2>
            <p>
                Titulo: <br>
                <input type="text" id="titulo" name="titulo">
            </p>
            <p>
                Categoria: <br>
                <input type="number" id="categoria" name="categoria">
            </p>
            <p>
                Descripcion: <br>
                <textarea id="descripcion" name="descripcion" cols="60" rows="20"></textarea>

            </p>
            <p>
                Fecha; <br>
                <input type="date" id="fecha" name="fecha">
            </p>
            <p>
                <input type="submit" id="enviar" name="enviar" value="enviar"> <br>
                <a href="index.php"> <button>Regresar a la pagina de inicio</button></a>
            </p>
            </h2>


        </form>
    </div>

</body>

</html>