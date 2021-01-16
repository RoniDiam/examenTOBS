# Examen
### Mi web app Roni Diament
Mi web app tiene tres vistas: El inicio, el detalle y el blog. 

En el inicio se puede ver una tabla de dos columnas, nombre del juego y su respectiva imagen. Si se hace click en la imagen, te lleva a la segunda vista que es el detalle. En esta, se encuentran todas las características del videojuego al cual se hizo click. Si vemos la URL, se puede observar que tiene un parámetro variable que es al Id del juego, el cual, para traer toda la información de ese juego, se consulta a la base de datos con dicho id y poder así retornar los datos correspondientes. Y algo también interesante a ver en la vista de detalle es que el nombre del juego tiene un h1 y la descripción un h4 dándole importancia a esto a nivel SEO.

Si bajamos hacia el final del inicio se puede ver otra tabla que también contiene dos columnas: Genero y cantidad de juegos. Esta tabla nace de consultar la tabla de “juegos” en la base de datos y contabilizando y agrupando la cantidad de juegos por género. Una vez hecho eso, se crea una nueva tabla “generoporcantidad1” donde se guarda toda esta información.

Por ultimo y no menos importante, mi agregado: ¡Un blog de videojuegos! elegí hacer un blog ya que es una herramienta muy importante del SEO on page. Es importante analizar esta vista del lado del SEO. Se puede ver que se apunta a palabras clave, se puede ver que tiene un enlazado tanto interno como externo. Esto se ve reflejado al hacer click en las imágenes, donde en la imagen de “Preguntados” y “Super Mario” te lleva a enlaces externos. ¡Pero en el caso de la imagen de “Dauntless”, te lleva al detalle de este videojuego! Este tipo de enlazado interno también nos ayuda a alargar “el tiempo de vida” del usuario en la página. También se puede observar que estas imágenes contienen el atributo alt.

Y todas las vistas tienen meta tags importantes como “description”, “canonical”, “keywords” y el title.
