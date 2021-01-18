<html>
    <head>
        <meta name="description" content="Todo el detalle de los juegos del momento. Ingresá ahora">
        <title>Detalle de videojuegos </title>
        <meta name="Keywords" content="videojuegos, juegos, videojuegos online, juegos online"/>
        <link rel= "canonical" href="detalle.php"/>

        <style>
            #estilo {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            #estilo td, #estilo th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #estilo tr:nth-child(even){background-color: #f2f2f2;}

            #estilo tr:hover {background-color: #ddd;}

            #estilo th {
            padding-top: 15px;
            padding-bottom: 15px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
            }

            ul {
                list-style-type: none;
                margin: 0;
                padding: 0;
                overflow: hidden;
                background-color: #333;
            }

            li {
                float: left;
                border-right:1px solid #bbb;
            }

            li:last-child {
                border-right: none;
            }

            li a {
                display: block;
                color: white;
                text-align: center;
                padding: 14px 16px;
                text-decoration: none;
            }
        </style>
    </head>

<?php  
    /*
    // The file
    $filePath = '1610734795_foto.jpg';

    // Get new dimensions
    list($width, $height) = getimagesize($filePath);
    $newWidth = $width *  0.5;
    $newHeight = $height *  0.5;

    // Resample
    $newImageGd = imagecreatetruecolor($newWidth, $newHeight);
    $imageGdFromFile = imagecreatefromjpeg($filePath);
    imagecopyresampled($newImageGd, $imageGdFromFile, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

    imagefilter($newImageGd, IMG_FILTER_GRAYSCALE);
    // Output
    imagejpeg($newImageGd, 'gray-escale.jpg');
    */

    $server = "localhost";
    $user = "root";
    $pass = "";
    $db = "juegos";

    $conexion = mysqli_connect($server, $user, $pass,$db) or die("No se pudo conectar con de la base de datos");


    $resultado = mysqli_query($conexion, "
    SELECT * FROM juegos WHERE id=".$_GET['variable']);

    mysqli_fetch_array($resultado);
    mysqli_close($conexion);
?>

    <body>
        <!-- <a href="https://blog.portinos.com/la-mateada/preguntados-gana-158-000-nuevos-jugadores-dia-a-dia-y-lo-juegan-hasta-en-japon" target="_blank"> <img src="gray-escale.jpg" alt="Preguntados: El juego más instalado del 2020"></a> -->

        <table id="estilo">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Thumbnail</th>
                    <th>Descripcion</th>
                    <th>Url del juego</th>
                    <th>Genero</th>
                    <th>Plataforma</th>
                    <th>Publisher</th>
                    <th>Desarrollador</th>
                    <th>Fecha de lanzamiento</th>
                    <th>Url del perfil</th>
                </tr>
                
                <?php  foreach ($resultado as $value)
                {     
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
                        <td><?php echo $id ?></td>
                        <td> <h1><?php echo $title ?> </h1></td>
                        <td><?php echo $thumbnail ?></td>
                        <td><h4><?php echo $description ?></h4></td>
                        <td><?php echo $gameUrl ?></td>
                        <td><?php echo $genre ?></td>
                        <td><?php echo $platform ?></td>
                        <td><?php echo $publisher ?></td>
                        <td><?php echo $developer ?></td>
                        <td><?php echo $releaseDate ?></td>
                        <td><?php echo $profileUrl ?></td>
                    </tr>
            </thead>
        <?php } ?>
    </table>
    </body>
</html>