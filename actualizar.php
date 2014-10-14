<?php 

  require_once './../conexiones/conexion.php';
  $user = $_GET['user'];
  $actualizar_query ="UPDATE FROM users WHERE user=".$user;

  $actualizar_object = $conexion->query($actualizar_query);


  header("Location: usuarios.php");

 ?>