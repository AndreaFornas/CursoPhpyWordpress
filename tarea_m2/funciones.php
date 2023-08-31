<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $email = $_POST["email"];

    // Conexión a la base de datos
    include("db_config.php");

    // Insertar datos en la base de datos
    $query = "INSERT INTO usuarios (nombre, email) VALUES ('$nombre', '$email')";
    if (mysqli_query($conn, $query)) {
        echo "Registro exitoso";
    } else {
        echo "Error en el registro: " . mysqli_error($conn);
    }

    // Cerrar la conexión
    mysqli_close($conn);
}
?>
