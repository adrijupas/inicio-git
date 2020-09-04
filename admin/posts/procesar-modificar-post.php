<?php 

//recoger datos que nos envian del formulario

if(isset($_POST['id_post'],$_POST['titulo'],$_POST['contenido'],$_POST['temas'])){

$id = $_POST['id_post'];
$titulo = $_POST['titulo'];
$contenido = $_POST['contenido'];
$temas = $_POST['temas'];


//conectar con la base de datos
include '../../conexion.php';

$consulta = "UPDATE post SET titulo='$titulo', contenido = '$contenido', temas= '$temas' WHERE id_post = $id";
//le mandamos al index de usuarios

if(mysqli_query($conexion,$consulta)){

header('location:index.php?exito=modificacion');

}

}else{
    header('location:index.php?error=modificacion');
}








?>