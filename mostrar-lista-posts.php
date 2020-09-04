<?php 
//1-realizamos la conexion
include 'conexion.php';
//verificamos la conexion
if(!$conexion){
    //si falla la conexion 
    echo 'No has podido conectarte, revisa los datos de acceso';
}else{
    //si la conexion no falla
    //echo 'Tienes una conexion excelente';
    //2-preparamos la consulta Y realizamos la consulta
    $consulta = "SELECT * FROM post";

    if($datos = mysqli_query($conexion, $consulta)){
        //recorremos la consulta
        //aqui usaremos los datos
        while($fila = mysqli_fetch_array($datos) ){
            //mostramos los datos mediante html
            include 'templates/template-lista-posts.php';
        
        }
        mysqli_close($conexion);
    }else{
        echo 'no se ha podido realizar la consulta';
    }
    
}
?>