<?php
session_start();

include 'db.inc.php';

//Si se ha rellenado anteriormente el formulario, comprobar lo datos
if(isset($_POST["nombre"])){

	//Sentencia SQL a ejecutar
	$sql = "select trim(contrasena) pwd, id, descripcion from public.usuarios where nombre = '" . $_POST["nombre"] . "'";
	echo $sql;
	$resultado = null;
	$newConnection = null;

	try {
		$newConnection = new PDO('pgsql:dbname=almacen;host=192.168.1.2','root','toor');
		$resultado = $newConnection->query($sql);
	} catch (\Throwable $th) {
		echo $th;
	}

	//$sql = "select trim(contrasena) pwd, id, descripcion from public.usuarios where nombre = '" . $_POST["nombre"] . "'";	
	//$resultado = ejecutar_SQL($conexion, $sql);

	//En principio. se da la contraseña como no válida
	$error = true;

	//Si hay filas, los datos de acceso eran correctos
	if($resultado != 0){
	  //Comprobando la contraseña	  
	  $fila = fila($resultado, 0);

	  if($fila["pwd"]==$_POST["pwd"]){
	  
		//Almacenar su ID en los datos de la sesi�n
		$_SESSION["usuario"] = $fila["id"];

		// Todo ok
		$error = false;
		
		//Dar la bienvenida
	  	echo "<h3>Login OK</h3>	Bienvenid@, " .$fila["descripcion"]. "<br> ulse <a href='producto.php'>aqu&iacute;</a> para continuar.";
	  }
    }
	if($error){
		echo "<h3>Login fallido</h3>";
	 }
}

//Si no se ha iniciado la sesi�n, mostrar un formulario de login
if(! isset($_SESSION["usuario"])){
 print  '<form method="POST" action="login2.php">
	    	<table border="1">
	 		<tr><td colspan="2">Introduzca sus datos de acceso</td></tr>
	 		<tr><td>Nombre:&nbsp;</td><td><input type="text" name="nombre" id="nombre"></td></tr>
	    	<tr><td>Clave:&nbsp;</td><td><input type="password" name="" id="pwd"></td></tr>
	    	</table>
	    	<input type="submit" value="Enviar">
        </form>';
}

?>
