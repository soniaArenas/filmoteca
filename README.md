# Filmoteca

Esta es una prueba para un proceso de selección en la cual se me pedía:

 - Realizar una **web** que permitiera añadir películas con sus años de estreno a una **base de datos**. 
- La web debía **cargar la lista** de las películas que hubiera registradas en la base de datos, **ordenarlas** por año en orden ascendente y descendente, y permitir **buscar** por nombre sin recargar la página.
- Las películas se debían añadir mediante un botón que al pulsarlo desplegaría los imputs necesarios para la inserción del nuevo registro.
- El proyecto debía ser realizado siguiendo la arquitectura de software **modelo-vista-controlador** .

# Implementación

Para realizar este proyecto comencé creando un repositorio con **Git** en local y luego subiéndolo a mi repositorio de **GitHub**, donde para comenzar a planificarme abrí unas **tareas** para dividir y organizar los primeros pasos que debía de seguir. Intentando así implementar algunas de las **buenas prácticas** en cuanto a metodologías ágiles de trabajo que conozco. Siguiendo la misma línea de intentar cumplir con buenas prácticas, he intentado que todo el código sea lo suficientemente claro y **autodocumentado** para que, sin la necesidad de tener comentarios, se entienda en todo momento lo que hace cada parte del código y procurando que sea **escalable**, pudiendo así añadir nuevas funcionalidades en un futuro si se desea.

## Planificación del desarrollo

Lo primero que he realizado para comenzar el desarrollo del proyecto ha sido crear las diferentes capas, o carpetas y archivos necesarios para seguir el modelo-vista-controlador. 

	1--> **Index.php**: El archivo que se carga al ingresar en la webservice, el cual cargará el controlador inicial.
		
	2-->**Controladores**:
		
	    **filmController.php**: Controlador encargado de cargar la vista principal.
	 
	    **getFilmsController.php**: Controlador encargado de llamar al modelo que obtiene la lista de la base de datos,
	    y manipula los datos que el modelo le devuelve, para mandarlos a la vista.
	 
	    **searchController.php**: Controlador encargado de pasar al modelo el dato que ha de buscar para que devuelva 
	    las películas correspondientes, manipular los datos y enviarlos a la vista.
	 
	    **addController.php**: Controlador encargado de pasar al modelo los datos del nuevo registro para que éste lo 
	    inserte en la base de datos.
	 
	 3-->**Vistas**:
		 
	     **indexFilms.php**: La vista principal con la estructura de la página, donde se mostrará la lista.
	
	 4-->**Modelos**:
		
	     **listFilmsModel.php**: El encargado de realizar la consulta a la base de datos, obtener la lista completa 
	     y devolverla al controlador.
	 
	     **searchModel.php**: Se encarga de consultar a la base de datos las películas que se ajusten a los parámetros 
	     requeridos y devolver los resultados al controlador.
	
	     **addModel.php**: El encargado de insertar en la base de datos el registro que ha obtenido desde el controlador.
	
	 5-->**Assets**:
		
	     **Css-style.css**: Los estilos de la web.
		
	     **Img**: la imagen utilizada.
		
	     **Js-js.js**: el archivo javascript con las funciones Ajax.


## Para ejecutar la aplicación correctamente

He adjuntado el archivo .sql para que se pueda exportar al gestor de base de datos y nos cree la tabla con sus campos. De este modo, descargando y colocando los archivos del proyecto en nuestra carpeta de archivos locales, en mi caso htdocs de Xampp, y creando la base de datos y exportando el archivo .sql, ya podríamos ejecutar la web en local.
También he subido el proyecto a mi servidor y creado la base de datos MySql en él, para que se pueda acceder sin tener que ejecutarla simulando un servidor web, y que se pueda comprobar su funcionamiento en un servidor web real. El enlace directo es el siguiente: www.soniapuente.com/filmoteca
	 
## Futuras mejoras

Refactorizar el código. 

Inlcuir imágenes de las películas y una breve escripción extraida de alguna web como Imdb.

Mejoras en la base de datos, como una conexión a Imdb que extraiga las valoraciones de las películas que tenemos registradas por ejemplo.

## Stack

-SublimeText 3 - Xampp -Windows 10 -Github 
-Html5, Css3, Jquery, Ajax, Php, MySql
