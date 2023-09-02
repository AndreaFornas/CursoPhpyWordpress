<?php include("header.php") ?>



<?php

$personaje = '';
$descripcion = '';
$img = '';
if (isset($_GET['personaje'])) {

    switch ($_GET['personaje']) {

        case 'db':
            $personaje = 'Albus Dumbledore';
            $descripcion = 'Albus Dumbledore era considerado como el mago más poderoso de su época. Él era famoso por derrotar a Gellert Grindelwald, descubrir doce usos de la sangre de dragón, y su trabajo en alquimia con Nicolas Flamel.';
            $img = './imagenes/Albus-Dumbledore.jpg';
            break;

        case 'hd':
            $personaje = 'Rubeus Hagrid';
            $descripcion = 'Rubeus Hagrid es el guardián de las llaves y terrenos en el Colegio Hogwarts de Magia y Hechicería, y más tarde se convierte en el profesor de Cuidado de Criaturas Mágicas.';
            $img = './imagenes/radaus-agrid.jpg';
            break;

        case 'mg':
            $personaje = 'Minerva McGonagall';
            $descripcion = 'McGonagall es conocida por su estricta adherencia a las reglas y su naturaleza justa pero firme. Es una maestra altamente competente y respetada, y una de las brujas más talentosas de su tiempo. A pesar de su exterior severo, tiene un profundo sentido de la justicia y un amor incondicional por sus estudiantes.';
            $img = './imagenes/mcgonagall.jpg';
            break;
    }
}
?>


<div class="image-surf">
    <img src="./imagenes/tablas-paddle-surf-sup.jpg" alt="">
</div>


<section>
    <div class="section-container-p">

        <h1>Personajes</h1>
        <h3>En esta lista utilizo en parámetro GET (en el href):</h3>
        <ul>
            <li><a href="personajes.php?personaje=db">Dumbledore</a></li>
            <li><a href="personajes.php?personaje=hd">Hagrid</a></li>
            <li><a href="personajes.php?personaje=mg">McGonnagall</a></li>


        </ul>
    </div>


    <div class="section-container">
    <h4>Personaje seleccionado:</h4>
        <h2 class="section-title"><?php echo $personaje ?></h2>
        <p class="section-description"><?php echo $descripcion ?></p>
        <img src="<?php echo $img ?>" alt="<?php echo $personaje ?>" class="section-image">
    
        </div>
   

    </section>






<?php include("footer.php") ?>