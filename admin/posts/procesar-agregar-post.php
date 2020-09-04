<?php  
if(isset($_POST['titulo'],$_POST['contenido'],$_POST['temas'])){

    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $temas = $_POST['temas'];

}
include '../../conexion.php';
if(!$conexion){
    echo 'la conexion no se ha establecido';
}else{
    $consulta = "INSERT INTO post(id_post,titulo,contenido,imagen_destacada,temas,publicado)VALUES(NULL, '$titulo', '$contenido',NULL,'$temas',NULL)";
    header('location:index.php');
mysqli_query($conexion,$consulta);
}

// $consulta = "INSERT INTO post(id_post,titulo,contenido,imagen_destacada,temas,publicado)VALUES(null, $titulo, $contenido,null,$temas,null);";

// mysqli_query($conexion,$consulta);