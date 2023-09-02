<?php include("header.php"); ?>

<section class="contacto_contenido">
<h2 class="contacto_principal">Formulario de contacto:</h2>

<div class="contact-form-container">

        <form action="enviar_consulta.php" method="post" class="contact-form">

            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>

            <label for="nombre">Apellido:</label>
            <input type="text" name="apellido" required>

            <label for="email">Correo Electrónico:</label>
            <input type="text" name="email" required>

            <label for="mensaje">Mensaje:</label>
            <textarea name="mensaje" rows="4" required></textarea>

            <button type="submit" value="Enviar consulta">Enviar</button>
        </form>
    </div>

    <?php
            if(isset ($_GET['ok'])){

                echo "<h3>Su mensaje ha sido enviado con éxito</h3>";
            }
    ?>
    </section>
</body>
</html>

<?php include("footer.php"); ?>