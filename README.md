#Prueba para perfil PHP Angular

La prueba consiste en realizar un pequeño microsite de gestión de recursos con programación OO PHP ( PHP orientado a objetos ).

Se valorará muy positivamente la utilización de Frameworks Symfony(v.2|v.3) o Laravel(v.5). Se recomienda utilizar las tecnologías dominadas diariamente. Si alguna de las consideraciones mas abajo citadas no es dominada, se puede usar cualquier otra vía para lograr el resultado.

Hay que crear una base de datos llamada 'test_backend_PHP', con una tabla llamada 'recursos', con los siguientes campos: 'nombre', 'descripción', 'imagen' y 'fecha_creacion'
Libertad a la hora del tipo de dato a utilizar.

Esta será la estructura del proyecto:

##1. Home

> Template sencilla en HTML. Aquí se deben renderizar los recursos desde la base de datos, mostrando el nombre, descripción e imagen de cada recurso.
> Los recursos deben estar paginados por AngularJS. ( Se puede establecer la paginación en dos recursos para evitar crear muchos registros )


##2. Contacto

> Se accederá a través de un link en la home. Formulario para añadir recursos a la web. Tendrá los siguientes campos: Nombre, descripción e imagen.
> El formulario debe comunicarse con una API (respuesta JSON) que deberá crear. Esa API ( en este caso fichero simple de funcionalidad PHP ) debe enviar un email a desarrollo@gobalo.es con los campos del formulario y 'Prueba backender PHP góbalo' como asunto. También guardará el recurso en la base de datos y ha de ser mostrado en la home.
> Una vez realizada la petición a la API, mostrar un mensaje en el caso de error, o mostrar un mensaje y ocultar el formulario en caso de éxito sin recargar la página.

_En el repositorio se proporcionan imágenes de prueba para asignar a los recursos._

*Tecnologías deseables:*

	- AngularJS, Angular 2, o en su defecto jQuery u otro FW Javascript
	
	- PHP

*Valorable:*

	- Limpieza y legibilidad en el código y en el scaffolding del proyecto
	
	- Funcionalidades extra no citadas
	
	- Menú o menú lateral simples
	
	- Posibilidad de añadir mas de una imagen a cada recurso
	
	- Documentación
	
	- Maquetación nivel FrontEnd


> Una vez terminada la prueba, actualizar el repositorio en la rama master con un dump de la base de datos creada ( estructura y datos ) y un fichero instrucciones.txt con todo lo necesario para el deploy de la aplicación.

