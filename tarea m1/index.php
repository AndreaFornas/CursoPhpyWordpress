<?php include("header.php") ?>


    <?php
    /* tarea 1: 


    tarea 2:
    1. Implementá en tu proyecto el uso de variables para manejar distintos tipos de datos.
    2. Efectuá alguna operación con los datos y mostrá el resultado haciendo uso de una nueva variable.
       Recordá utilizar los delimitadores y la sintaxis adecuada para asignar e imprimir variables.
       
       tarea 3:
    1. Cree una estructura de formulario y haciendo uso de la función mail, realice la codificación necesaria
        para que se envíe un mail que recupere la información del remitente.
        Para la actividad, sugiero registrarse en un host gratuito, por ejemplo 000webhost. Luego, suba los archivos y verifique la correcta implementación de lo solicitado.
        Enviar url proporcionada por el host.


       
        Tarea
        Actividad Integradora Obligatoria Módulo 1

        Crear un sitio web implementando los contenidos abordados en el módulo.

        La aplicación deberá contener (si fueron haciendo los trabajos de cada unidad, la mayoría del contenido ya lo tienen):

        Sitio maquetado en HTML5 y CSS3.

        1 funcionalidad que utilice el método GET para enviar datos. Se deben mostrar, al menos 3 datos diferentes, creados con variables.

        Emplear al menos 1 estructura de control.

        Implementar funciones del lenguaje (por ejemplo: mail)
       
               */
    ?>



<?php
//comentario de una linea

$titulo = "Desarrollo Web con PHP y Wordpress";
$unidades_curso1 = 8;
$arancel = 20356.2;
$fecha = '10/12/23';

$curso_2 = "Programador Web Avanzado";
$unidades_curso_2 = 5;
$arancel_2 = 30506.5;
$fecha_2 = '10/07/24';

?>


<section class="contenido">

    <div class="curso_php">
        <h1>Diplomatura de Professional Backend Developer:</h1>

    </div>



    <div class="curso_1">
        <h2><?php echo $titulo ?></h2>
        <ul>
            <li>Duración: <?php echo $unidades_curso1 ?></li>
            <li>Arancel: <?php echo $arancel ?></li>
            <li>Fecha: <?php echo $fecha ?></li>

        </ul>
    </div>

    <div class="curso_2">
        <h2><?php echo $curso_2 ?></h2>
        <ul>
            <li>Duración: <?php echo $unidades_curso_2 ?></li>
            <li>Arancel: <?php echo $arancel_2 ?></li>
            <li>Fecha: <?php echo $fecha_2 ?></li>

        </ul>
    </div>

    <?php
    $dolar = 490;
    $duraciontotal = $unidades_curso1 + $unidades_curso_2;
    $aranceltotal = $arancel + $arancel_2;
    $aranceldolar = $aranceltotal / $dolar;

    ?>

    <div class="curso_total">
        <h2>Totales de la diplomatura:</h2>
        <ul>
            <li>Duración total: <?php echo $duraciontotal ?></li>
            <li>Arancel total: <?php echo $aranceltotal ?></li>
            <li>Arancel total en dolares: <?php echo round($aranceldolar) ?></li>
            <li>Fecha: <?php echo $fecha ?></li>

        </ul>

    </div>

</section>
<?php include("footer.php"); ?>