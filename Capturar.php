<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Semana 01</title>
</head>
<body>
    <h1>Captura de Datos</h1>
    <a href="Index.php">Index</a>
    <a href="Varibales.php">Variables</a>
    <a href="Operaciones.php">Operaciones</a>
    <a href="Formularios.php">Envio de datos</a>
    <br>
    <br>
    <!--Nomenclatura Script php-->
    <?php
    # Captura de Datos
    $nombre = $_REQUEST["nombre"];
    $apellido = $_REQUEST["apellido"];
    echo"La persona se llama: $nombre $apellido";

    ?>
</body>
</html>