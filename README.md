# Laboratorio de SQL Injection Dockerizado.
### Laboratorio dockerizado para practicar los ejercicios de SQL Injection expuestos en el libro: Hacking de Aplicaciones Web: SQL Injection de 0xWord.

![](https://0xword.com/224-thickbox_default/libro-hacking-aplicaciones-web-sql-injection.jpg | width=48)

---

Con este laboratio podrás practicar todos los ejercicios expuestos en el libro de una forma fácil y muy rápida. Las tecnologías usadas y el código son los mismos que están en el libro. El laboratorio esta estructurado según los caputilos del libro, por cada capítulo hay una carpeta que contiene todo lo necesario para levantar un entorno en local.

Para crear los entornos necesitaras *docker* y *docker-compose* en tu máquina. Si no los tienes instalados puedes seguir los pasos de su página oficial: [docker](https://docs.docker.com/engine/install/) y [docker-compose](https://docs.docker.com/compose/install/)

Dentro de cada carpeta encontrarás un archivo llamado *docker-compose.yml*, será todo lo que necesites para levantar el entorno en local.
Para ello debes abrir el interprete de comando del sistema operativo que estes usando, situarte en la carpeta del capítulo que quieras practicar y lanzar el comando *docker-compose up*. Solo la primera vez tardará unos minutos, luego apenas unos segundos.

## Capítulo I
------------

> **CUIDADO:** la tabla *usuarios* que se expone en el libro define una columuna llamada *desc*, en el laboratorio esta columna se llama *descripcion*.

Debes tener en cuenta que el código de estos ejercicios guardan una sesión de usuario en el navegador. Cada vez que consigas autenticarte en la aplicación con unas credenciales "válidas" ;) deberás eliminar las *cookies* de sesión del navegador si quieres volver al formulario de login.

#### Puntos de entrada
Archivo | Link
--- | ---
login.php | [http://127.0.0.1:8080/login.php](http://127.0.0.1:8080/login.php)
login2.php | [http://127.0.0.1:8080/login2.php](http://127.0.0.1:8080/login2.php)

#### php.ini
En este capitulo deberás cambiar la configuración de PHP para mostrar o no mostrar errores por pantalla. Para ello tienes que modificar el fichero *php.ini* que se encuentra dentro del directorio *config*. Para aplicar los cambios deberás reiniciar el entorno, para ello para la ejecución del entorno actual, luego ejecuta **docker-compose down** y por utimo **docker-compose up --force-recreate**.
