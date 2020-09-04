<?php 
include 'datos-conexion.php';
$conexion = mysqli_connect(SERVIDOR,USUARIO,PASSWORD,DB);
//cargar carecteres utf-8 en php
mysqli_set_charset($conexion, "utf8");

?>