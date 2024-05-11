<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Confirmación de Envío</title>
</head>
<body>
    <h1>¡Gracias por enviar tu información!</h1>
    <p>A continuación, se muestran los datos que enviaste:</p>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST["nombre"];
        $email = $_POST["email"];
        $edad = $_POST["edad"];
        $pais = $_POST["pais"];
        $comentario = $_POST["comentario"];

        echo "<p><strong>Nombre:</strong> $nombre</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Edad:</strong> $edad</p>";
        echo "<p><strong>País:</strong> $pais</p>";
        echo "<p><strong>Comentario:</strong> $comentario</p>";
    }
    ?>

    <p>¡Gracias de nuevo por tu interés en la Torre Eiffel!</p>
</body>
</html>