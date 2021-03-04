<html>

<head>
    <meta name="description" content="Todo el detalle de los juegos del momento. Ingresá ahora">
    <title>Detalle de videojuegos </title>
    <meta name="Keywords" content="videojuegos, juegos, videojuegos online, juegos online" />
    <link rel="canonical" href="detalle.php" />
    <link rel="stylesheet" href="style.css">
</head>

<?php

include_once("header.php");


$server = "localhost";
$user = "root";
$pass = "";
$db = "juegos";

$conexion = mysqli_connect($server, $user, $pass, $db) or die("No se pudo conectar con de la base de datos");


$resultado = mysqli_query($conexion, "
    SELECT * FROM juegos WHERE id=" . $_GET['id']);

mysqli_fetch_array($resultado);
mysqli_close($conexion);
?>

<body>

    <table id="estilo">
        <?php foreach ($resultado as $value) {
            $id = $value["id"];
            $title = $value["nombre"];
            $thumbnail = $value["thumbnail"];
            $description = $value["descripcion"];
            $gameUrl = $value["urlJuego"];
            $genre = $value["genre"];
            $platform = $value["plataforma"];
            $publisher = $value["publisher"];
            $developer = $value["developer"];
            $releaseDate = $value["fechaLanzamiento"];
            $profileUrl = $value["urlPerfil"];
        ?>
            <tr>
            </tr>
        <?php } ?>
    </table>
</body>

</html>


<div class="card">
    <h1><?php echo $title ?> </h1>
    <img src="<?php echo $thumbnail ?>" alt="Thumbnail">
    <div class="container">
        <p> <b>Descripcion: </b> <?php echo $description ?> </p>
        <p> <b>Url del juego: </b><?php echo $gameUrl ?> </p>
        <p> <b> Genero: </b> <?php echo $genre ?> </p>
        <p> <b> Plataforma: </b> <?php echo $platform ?> </p>
        <p> <b> Publisher: </b> <?php echo $publisher ?> </p>
        <p> <b> Desarrollador: </b> <?php echo $developer ?> </p>
        <p> <b> Fecha: </b> <?php echo $releaseDate ?> </p>
        <p> <b> Url del perfil: </b> <?php echo $profileUrl ?></p>
    </div>
</div>