<?php
//no se ´puede acceder a esta pagina directamente en la URL solo se entra por medio de post
	$val = "arlette";
	$nombre=$_POST["nombre"];
	$contrasenia=$_POST["contrasenia"];	//usa una variable intermedia
	//al manejo de bases de datos da problemas las commillas, por eso se 
	
	if(($_POST["nombre"] != "") && ($_POST["contrasenia"] != " ")){	//que el nombre no este vacio
		if(strcmp($val,$nombre)==0){	//que sea ale el loggueado	
			header("Location: bienvenido.php");	//funcion que redirige a donde le indicamos
		}
	}
	else
	header("Location: registrarse.php"); //redirigue a esta otra pag si no
	
	//isset() es para ver si existe
?>