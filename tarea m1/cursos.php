<?php include("header.php") ?>
<?php
$curso = '';
$descripcion = '';
$img = '';
if (isset($_GET['curso'])) {

    switch ($_GET['curso']) {

        case 'ci':
            $curso = 'Curso Iniciación al Paddle Surf - Descubre la Magia del Mar en Pie';
            $descripcion = 'Sumérgete en el emocionante mundo del paddle surf con nuestro curso de iniciación. Aprende las técnicas básicas para mantener el equilibrio, remar con confianza y explorar las aguas tranquilas mientras te deslizas sobre la tabla. Nuestros instructores expertos te guiarán en esta emocionante aventura acuática, brindándote la seguridad y habilidades necesarias para disfrutar al máximo de esta experiencia única en el mar. Descubre la sensación de libertad mientras te desplazas sobre las aguas, conectando con la naturaleza y encontrando una nueva forma de ejercicio y relajación.';
            $img = './imagenes/curso-inicial.jpg';
            break;

        case 'ca':
            $curso = 'Curso Paddle Surf Avanzado - Domina las Olas con Destreza y Estilo';
            $descripcion = 'Si ya has conquistado las aguas tranquilas y estás buscando un nuevo desafío, nuestro curso de Paddle Surf Avanzado es perfecto para ti. Aprende a enfrentarte a las olas con confianza, perfecciona tu técnica de remada y descubre cómo maniobrar con agilidad en condiciones más desafiantes. Nuestros instructores altamente capacitados te llevarán al siguiente nivel, ayudándote a dominar las habilidades avanzadas necesarias para surcar las olas con destreza y estilo.';
            $img = './imagenes/curso-avanzado.jpg';
            break;

        case 'full':
            $curso = 'Curso Paddle Surf Total - Desde Iniciación Serena hasta Dominio Avanzado';
            $descripcion = 'Este curso completo te brinda lo mejor de ambos mundos, combinando la serenidad de la iniciación al paddle surf con la emoción de conquistar olas desafiantes en el nivel avanzado. Comienza desde cero y aprende las bases del equilibrio y la remada, luego avanza hacia la maestría en el dominio de las olas. Nuestros instructores expertos te guiarán en cada paso del camino, asegurándose de que adquieras las habilidades necesarias para convertirte en un verdadero experto del paddle surf, sin importar si buscas tranquilidad o emoción en el agua.';
            $img = './imagenes/curso-full.jpg';
            break;
    }
}
?>

<div>
<ul class="enlaces-list">
        <li><a href="cursos.php?curso=ci">Curso Iniciación al Paddle Surf</a></li>
        <li><a href="cursos.php?curso=ca">Curso Paddle Surf Avanzado</a></li>
        <li><a href="cursos.php?curso=full">Curso Paddle Surf Total</a></li>
    </ul>
</div>

<div class="image-surf">
    <img src="<?php echo $img ?>" alt="<?php echo $curso ?>">
</div>

<h2 class="section-title"><?php echo $curso ?></h2>

<p class="section-description"><?php echo $descripcion ?></p>

    

<?php include("footer.php") ?>