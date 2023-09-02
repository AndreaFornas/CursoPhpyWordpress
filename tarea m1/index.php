<?php include("header.php") ?>
<div class="image-surf">
    <img src="./imagenes/tablas-paddle-surf-sup.jpg" alt="">
</div>
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

$titulo = "Curso de Surf Paddel Inicial";
$unidades_curso1 = 8;
$arancel = 10000;
$fecha = '01/12/23';

$curso_2 = "Curso de Surf Paddel Avanzado";
$unidades_curso_2 = 6;
$arancel_2 = 20000;
$fecha_2 = '01/03/24';

?>
<?php
$dolar = 490;
$duraciontotal = $unidades_curso1 + $unidades_curso_2;
$aranceltotal = $arancel + $arancel_2;
$aranceldolar = $aranceltotal / $dolar;

?>

<section class="contenido">

   <!--  <div class="curso_surf">
        <h1>Estos son nuestros cursos de paddle surf:</h1>
    </div> -->

    <table>
        <tr>
            <th></th>
            <th><?php echo $titulo ?></th>
            <th><?php echo $curso_2 ?></th>
            <th>Full Paddle Surf</th>
        </tr>
        <tr>
            <td>Duración (en semanas):</td>
            <td><?php echo $unidades_curso1 ?></td>
            <td><?php echo $unidades_curso_2 ?></td>
            <td><?php echo $duraciontotal ?></td>
        </tr>
        <tr>
            <td>Costo en pesos argentinos:</td>
            <td><?php echo $arancel ?></td>
            <td><?php echo $arancel_2 ?></td>
            <td><?php echo $aranceltotal ?></td>
        </tr>
        <tr>
            <td>Fecha de inicio:</td>
            <td><?php echo $fecha ?></td>
            <td><?php echo $fecha_2 ?></td>
            <td><?php echo $fecha ?></td>
        </tr>
    </table>




</section>
<?php include("footer.php"); ?>