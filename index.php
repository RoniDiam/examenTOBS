<!DOCTYPE html>
<html>
    <head>
        <meta name="description" content="La mejor conexión con la API de freetogame.com en un solo lugar">
        <title>Localhost - conexión a la API de videojuegos </title>
        <meta name="Keywords" content="videojuegos, juegos, videojuegos online, juegos online"/>
        <link rel= "canonical" href="index.php"/>

        
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

            li a:hover:not(.estilosBarra) {
                background-color: #111;
            }

            .estilosBarra {
                background-color: #4CAF50;
            }
            .gris{
                filter: grayscale(100%);
            }
        </style>
    </head>
    <body>
        <?php
            $curl = curl_init();
        
            curl_setopt_array($curl, [ 
                CURLOPT_RETURNTRANSFER => 1,
                CURLOPT_URL => 'https://www.freetogame.com/api/games'
             ]);

            $json = curl_exec($curl);

            // Convierto String en JSON a variable de PHP
            $juegos = json_decode($json, true);
            set_time_limit(1000);

            curl_close($curl);
        ?>
 
        <ul>
            <li><a class="estilosBarra" href="#inicio">Inicio</a></li>
            <li><a href="blog.php">Blog</a></li>

        </ul>
        
        <br/>
        
        <table id="estilo">
                <thead>
                    <tr>
                        <th>Nombre del juego</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
        <?php    
        function save_image($inPath,$outPath)
            { //Download images from remote server
                $in=    fopen($inPath, "rb");
                $out=   fopen($outPath, "wb");
                while ($chunk = fread($in,8192))
                {
                    fwrite($out, $chunk, 8192);
                }
                fclose($in);
                fclose($out);
            }

        foreach ($juegos as $value) 
        {
                $cadena = $value['title'];
                $imagenes = $value['thumbnail'];
                ?>
                <tr>
                    <td>
                <?php 
                    echo($cadena);
                    $image_name = time()."_foto".".jpg";
                    /*

                    save_image($imagenes, $image_name); 
                    
                    // Get new dimensions
                    list($width, $height) = getimagesize($image_name);
                    $newWidth = $width *  0.5;
                    $newHeight = $height *  0.5;
                        
                    $newImageGd = imagecreatetruecolor($newWidth, $newHeight);
                    $imageGdFromFile = imagecreatefromjpeg($image_name);
                    imagecopyresampled($newImageGd, $imageGdFromFile, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
                    
                    imagefilter($newImageGd, IMG_FILTER_GRAYSCALE);
                    // Output
                    $image_name_modificada = time()."gray-escale".".jpg";
                    imagejpeg($newImageGd, $image_name_modificada);
                */
                ?>
                    </td>
                    <td>
                        <a href="detalle.php?variable=<?php echo($value["id"]) ?>" target="_blank"><img src= <?php echo($imagenes) ?> > </a>

                    </td>
                </tr>
                <?php 
                
                $server = "localhost";
                $user = "root";
                $pass = "";
                $db = "juegos";

                $conexion = mysqli_connect($server, $user, $pass,$db) or die("No se pudo conectar con de la base de datos");

                $id = $value["id"];
                $title = $value["title"];
                $thumbnail = $value["thumbnail"];
                $description = $value["short_description"];
                $gameUrl = $value["game_url"];
                $genre = $value["genre"];
                $platform = $value["platform"];
                $publisher = $value["publisher"];
                $developer = $value["developer"];
                $releaseDate = $value["release_date"];
                $profileUrl = $value["freetogame_profile_url"];

                $sql = mysqli_query($conexion, "
                INSERT INTO juegos
                    (id, nombre, thumbnail, descripcion, urlJuego, genre, plataforma, publisher, developer, fechaLanzamiento, urlPerfil) 
                VALUES
                    ('$id', '$title', '$thumbnail', '$description', '$gameUrl', '$genre', '$platform', '$publisher', '$developer', '$releaseDate', '$profileUrl')
                ");


                $resultado = mysqli_query($conexion, "
                    CREATE TABLE generoporcantidad1 AS SELECT genre, COUNT(*) AS cant FROM juegos GROUP BY 1 ORDER BY 2 desc");
                

                    $result = mysqli_query($conexion, "
                    SELECT * FROM generoporcantidad1");

                    mysqli_fetch_array($result);
                    mysqli_close($conexion);
        }
        ?>
        </table>

        <table id="estilo">
                <thead>
                <tr>
                    <th>Género</th>
                    <th>Cantidad de juegos</th>
                </tr>
                <?php  foreach ($result as $valor){ ?>
                    <tr>
                        <td><?php echo $valor['genre'] ?></td>
                        <td><?php echo $valor['cant'] ?></td>
                    </tr>
                </thead>
                <?php } ?>
        </table>
    </body>
</html> 