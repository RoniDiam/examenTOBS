<!DOCTYPE html>
<html>
  <head>
    <meta name="description" content="El blog de videojuegos donde vas a encontrar las tendencias y las últimas novedades">
    <title> Blog | videojuegos </title>
    <meta name="Keywords" content="videojuegos, juegos, videojuegos online, juegos online"/>
    <link rel= "canonical" href="blog.php"/>


    <style>
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
      * {
        box-sizing: border-box;
      }

      /* Add a gray background color with some padding */
      body {
        font-family: Arial;
        padding: 20px;
        background: #f1f1f1;
      }

      /* Header/Blog Title */
      .header {
        padding: 30px;
        font-size: 40px;
        text-align: center;
        background: white;
      }

      /* Create two unequal columns that floats next to each other */
      /* Left column */
      .leftcolumn {   
        float: left;
        width: 75%;
      }

      /* Right column */
      .rightcolumn {
        float: left;
        width: 25%;
        padding-left: 20px;
      }

      /* Fake image */
      .fakeimg {
        background-color: #aaa;
        width: 100%;
        padding: 20px;
      }

      /* Add a card effect for articles */
      .card {
        background-color: white;
        padding: 20px;
        margin-top: 20px;
      }

      /* Clear floats after the columns */
      .row:after {
        content: "";
        display: table;
        clear: both;
      }

      @media screen and (max-width: 800px) {
        .leftcolumn, .rightcolumn {   
          width: 100%;
          padding: 0;
        }
      }
      </style>
  </head>

  <body>

    <ul>
      <li><a href="index.php">Inicio</a></li>
      <li><a class="estilosBarra" href="blog.php">Blog</a></li>
    </ul>


    <div class="header">
      <h2>Blog</h2>
    </div>

    <div class="row">
      <div class="leftcolumn">
        <div class="card">
          <h2>El juego más descargado del 2020</h2>
          <h5>APPLE PUBLICA EL JUEGO MÁS DESCARGADO DEL 2020 PARA IPHONE Y IPAD, 12 de Enero 2021</h5>
          <a href="https://blog.portinos.com/la-mateada/preguntados-gana-158-000-nuevos-jugadores-dia-a-dia-y-lo-juegan-hasta-en-japon" target="_blank" rel=“nofollow”> <img src="preguntados-el-juego-mas-instalado-del-2020.jpg" alt="Preguntados: El juego más instalado del 2020" width="900" height="600"></a>
          <p>Termina el año y se hacen públicos los resúmenes de los éxitos en las tiendas digitales de iOS y Android. Fue ayer a última hora de la tarde, prácticamente a la vez, cuando Google y Apple anunciaron cuáles han sido las apps y videojuegos más descargados de sus respectivas plataformas en 2020. Unos tops en los que encontramos una curiosa semejanza entre lo más instalado en los iPhone y los iPad.
             Efectivamente, al menos en lo que a la categoría de "apps gratis" se refiere, hay un claro vencedor tanto en la parte de los móviles como en la de los tablets, y es Preguntados.</p>
        </div>
        <div class="card">
          <h2>Conoce las novedades de super mario 3d world</h2>
          <h5>Un vistazo en profundidad a sus funciones en Nintendo Switch, y a la nueva región del juego: el Mar de los Zarpazos., 2 de Diciembre 2020</h5>
          <a href="https://www.3djuegos.com/noticias-ver/210715/todas-las-novedades-de-super-mario-3d-world-bowsers-fury-al/" target="_blank" rel=“nofollow”><img src="super-mario-3d-world.jpg" alt="Conoce las novedades de super mario 3d world" width="900" height="600"></a>
          <p>Cada vez queda menos para el estreno de Super Mario 3D World + Bowser's Fury en Nintendo Switch. La reedición del juego de Wii U llegará a la consola híbrida acompañada por una nueva expansión que promete ampliar gratamente los contenidos de este colorido juego de Mario que muchos no pudieron probar en su día. Y de hecho, a principios de esta semana se publicaba un tráiler del juego centrado en sus novedades, que desataba la emoción de los fans de la aventura.</p>
        </div>
      </div>
      <div class="rightcolumn">
        <div class="card">
          <h2>Análisis de Dauntless</h2>
          <a href="detalle.php?variable=1" target="_blank" rel=“nofollow”><img src="analisis-dauntless.jpg" alt="Exclusivo analisis de Dauntless" width="270" height="100"></a>
          <p>El estudio Phoenix Labs, formado a partir de veteranos de BioWare y Riot Games, lanza por fin la versión final de su primer juego, Dauntless. Nos adentramos en las Islas Fragmentadas para plantar cara a sus imponentes Behemoth, y perder la noción del tiempo en el proceso. Enfúndate el yelmo y coge tu martillo. Análisis de Dauntless.</p>
        </div>
    </div>

    <br/>
  </body>
</html>