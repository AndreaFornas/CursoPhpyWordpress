<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <title>Introducción php</title>
</head>

<body>
    <header>
        <nav class="nav_principal">

            <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="#">Personajes</a></li>
            <li><a href="#">Contacto</a></li>
                
            </ul>

        </nav>

    </header>
    <h1>Introducción php</h1>

    <?php
    //comentario de una linea

    /*comentario de 
    multilineas*/

    echo "<h2>Hola mundo hhhh</h2>";
    print "<h2>Hola mundo hhhh</h2>";
    $titulo = "Desarrollo web con php y wordpress";
    $unidades_curso = 8;
    $arancel = 2035.5;
    $fecha = '31/07/23';

    $curso_2 = "Programador web avanzado";
    $unidades_curso_2 = 8;
    $arancel_2 = 30506.5;
    $fecha_2 = '10/07/24';

    ?>

    <section class="contenido">
        <div class="curso_1">
            <h2><?php echo $curso_2 ?></h2>
            <ul>
                <li>Duración: <?php echo $unidades_curso_2 ?></li>
                <li>Arancel: <?php echo $arancel_2 ?></li>
                <li>Fecha: <?php echo $fecha_2 ?></li>

            </ul>
        </div>

        <div class="curso_2">
            <h2><?php echo $titulo ?></h2>
            <ul>
                <li>Duración: <?php echo $unidades_curso ?></li>
                <li>Arancel: <?php echo $arancel ?></li>
                <li>Fecha: <?php echo $fecha ?></li>

            </ul>
        </div>


        <?php
        $dolar = 490;
        $duraciontotal = $unidades_curso + $unidades_curso_2;
        $aranceltotal = $arancel + $arancel_2;
        $aranceldolar = $aranceltotal / $dolar;

        ?>

        <div class="curso_total">
            <h2>Totales diplomatura</h2>
            <ul>
                <li>Duración total: <?php echo $duraciontotal ?></li>
                <li>Arancel total: <?php echo $aranceltotal ?></li>
                <li>Arancel total en dolares: <?php echo round($aranceldolar) ?></li>
                <li>Fecha: <?php echo $fecha ?></li>

            </ul>

        </div>

    </section>
</body>

</html>