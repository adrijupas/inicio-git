<?php 

//recoger datos que nos envian del formulario

if(isset($_POST['id_usuario'],$_POST['nombre'],$_POST['email'],$_POST['password'])){

$id = $_POST['id_usuario'];
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$password = $_POST['password'];


//conectar con la base de datos
include '../../conexion.php';

$consulta = "UPDATE usuarios SET nombre='$nombre', email = '$email', `password`= '$password' WHERE id_usuario = $id";
//le mandamos al index de usuarios

if(mysqli_query($conexion,$consulta)){

header('location:index.php?exito=modificacion');

}

}else{
    header('location:../../index.php?error=modificacion');
}








?>