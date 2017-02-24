# users_mvc
User System with PHP MVC 
# Estructura de directorios
En nuestro “framework” tendremos varios directorios:
* config: aquí irán los ficheros de configuración de la base de datos, globales, etc.

* controller: como sabemos en la arquitectura MVC los controladores se encargarán de recibir y filtrar datos que le llegan de las vistas, llamar a los modelos y pasar los datos de estos a las vistas. Pues en este directorio colocaremos los controladores

* core: aquí colocaremos las clases base de las que heredarán por ejemplo controladores y modelos, y también podríamos colocar más librerías hechas por nosotros o por terceros, esto sería el núcleo del framework.

* model: aquí irán los modelos, para ser fieles al paradigma orientado objetos tenemos que tener una clase por cada tabla o entidad de la base de datos(excepto para las tablas pivote) y estas clases servirán para crear objetos de ese tipo de entidad(por ejemplo crear un objeto usuario para crear un usuario en la BD). 

 También tendremos modelos de consulta a la BD que contendrán consultas más complejas que estén relacionadas con una o varias entidades.
 
* view: aquí iran las vistas, es decir, donde se imprimirán los datos y lo que verá el usuario.

* index.php será el controlador frontal por el que pasará absolutamente todo en la aplicación.

Estructura:

Source Files
	/
	|_/ config
	| |_database.php
	| |_global.php
	|
	|_/ controller
	| |_UsuariosController.php
	|
	|_/ core
	| |_/FluentPDO
	|   |_AyudaVistas.php
	|	|_Conectar.php
	|	|_ControladorBase.php
	|	|_ControladorFrontal.fun.php
	|	|_EntidadBase.php
	|	|_ModeloBase.php
	|
	|_/model
	| |_Usuario.php
	| |_UsuarioModel.php
	|
	|_/view
	| |_indexView.php
	|_index.php


	