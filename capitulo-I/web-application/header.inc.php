<?php

    session_start();

    include "db.inc.php";

    if(isset($_SESSION["usuario"])){
        
	//Obtener el nombre del usuario
	$sql = "select * from public.usuarios where id = " . $_SESSION["usuario"];
    
        $resultado = ejecutar_SQL($conexion, $sql);
        $fila = fila($resultado, 0);
	$usuario = $fila["descripcion"];

	//Mostrar un indicador del usuario logeado
	echo '<table border=1 width="100%">
	          <tr width="100%"><td>HA INICADO SESIÓN COMO: ' . $usuario . '</td></tr>
              </table>';
    } else {
        //Si no estás logado, redirigir a login
	header('Location: login2.php'); 
    }
?>
