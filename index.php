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
    <h1 class="titulo">Página de juegos</h1>
    <!-- Menu -->
    <?php require_once("menu.php") ?>


    
    <div class="form_derecha">
        <!-- Iniciar sesion -->
        <?php require_once("iniciar_sesion.php") ?>

        <!-- Registrar usuario -->
        <?php require_once("registrar_usuario.php") ?>

    </div>



    <br><br><br><br>
    <div class="principal">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla eu mi at metus dapibus lobortis. Fusce vitae nisi sit amet tellus pretium iaculis. Nullam in lectus non nibh ultricies tincidunt non at dolor. Donec ut quam porttitor, molestie odio eget, consequat lacus. Suspendisse aliquam odio non nulla blandit hendrerit et a leo. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. In a luctus dui. Praesent et malesuada quam. Morbi fermentum felis eu ex aliquet, ut vehicula libero vehicula. Mauris blandit ante ligula, in suscipit eros laoreet id. Ut fermentum at metus sed scelerisque. Aenean tristique sit amet augue in vehicula.

        Morbi fringilla lorem lobortis sem mattis porta. Nunc ultricies purus ut ultrices sodales. Ut nec aliquet purus, vitae iaculis libero. Nam at orci at justo luctus suscipit sagittis non diam. Ut eget purus vitae ante ultricies pellentesque eget id eros. Maecenas auctor diam est, at convallis velit blandit eu. Duis sed enim efficitur, faucibus tortor sit amet, aliquam ligula. Sed fermentum nulla ac magna viverra rhoncus. Aliquam nec porttitor libero. Proin aliquam diam a nibh volutpat, blandit convallis sem suscipit. Etiam purus ex, maximus sed ligula a, molestie hendrerit arcu. Vestibulum dapibus, purus in scelerisque malesuada, purus lacus pulvinar lacus, quis cursus nulla erat sit amet diam. In consectetur vehicula nisl sed volutpat. Curabitur eu lectus nunc. Curabitur vitae faucibus magna. Donec leo orci, pulvinar ac mi ut, efficitur placerat risus.

        Suspendisse elit elit, elementum sit amet elit eu, tincidunt sollicitudin arcu. Cras dapibus, mauris at vulputate semper, mi turpis scelerisque mi, non pharetra sem erat consectetur ex. Nunc a libero volutpat, hendrerit neque quis, consequat sapien. Sed iaculis mollis lacus et tempus. Ut vulputate, magna consectetur feugiat gravida, erat ex ultricies metus, nec suscipit risus metus in arcu. Morbi porta, lacus nec accumsan ornare, quam nisl commodo leo, at ultrices massa velit sed purus. Nulla facilisi. Phasellus pretium elit a lectus vehicula, quis ullamcorper urna iaculis. Vestibulum consequat nibh in tellus molestie blandit. Curabitur ac aliquam felis. Aenean sed lacinia neque. Morbi nec enim sapien. Suspendisse fermentum dolor id enim pulvinar faucibus. Cras consequat lacus non pretium bibendum.

        Sed massa nunc, semper placerat leo quis, pulvinar semper arcu. Aliquam sit amet mauris et leo scelerisque lobortis. Phasellus ultricies risus eu dolor dignissim ullamcorper at eget tortor. Fusce ultricies enim ac pretium ornare. Ut sit amet ipsum ut nisi vehicula egestas. Pellentesque eu risus eu felis dignissim vulputate. Etiam interdum sapien eu enim ornare aliquam. Nulla consequat, velit vitae egestas pellentesque, nisl elit convallis nibh, sit amet ornare nisi arcu at nunc. Duis rutrum, ipsum id accumsan congue, nulla nunc pharetra nisl, in ullamcorper eros neque sed ligula. Vivamus id dui pretium, tristique ante in, tincidunt neque.

        Interdum et malesuada fames ac ante ipsum primis in faucibus. Cras faucibus ullamcorper sagittis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum vitae neque turpis. Aenean aliquet lacus vitae porttitor aliquet. Proin eu erat eget felis maximus pellentesque in vel dui. Duis viverra orci non magna luctus ultrices. Nullam et blandit urna. Mauris finibus sem non ligula sagittis, et facilisis massa vulputate. Sed vitae felis diam. Maecenas metus elit, mattis at vestibulum sit amet, bibendum non quam. Proin egestas nec turpis sit amet fringilla.</div>

    </div>

    <?php
    $servidorBD = "127.0.0.1";
    $nombreDB = "proyecto";
    $con = new mysqli($servidorBD, "angel", "angel", $nombreDB);
    ?>

</body>

</html>