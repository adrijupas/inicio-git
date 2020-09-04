<?php 

//coge los datos del formulario y los envia a la tabla usuarios de la base de datos 
//si existen los datos introducidos, los igualaremos a variables
if(isset($_POST['nombre'],$_POST['email'],$_POST['password'])){
    //igualamos los datos a variables 
    $nombre = $_POST['nombre'];
    $email =  $_POST['email'];
    $password = $_POST['password'];

}
//realizamos la conexion a la base de datos
include '../../conexion.php';
//preparamos la consulta
$consulta = "INSERT INTO usuarios (id_usuario,nombre,email,`password`)VALUES('0','$nombre','$email','$password')";
//ejecutamos la consulta

if(mysqli_query($conexion,$consulta)){
    mysqli_close($conexion);
    header('location:index.php');
}else{
    echo 'no funciona';
}











?>