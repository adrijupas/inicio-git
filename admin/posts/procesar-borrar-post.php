<?php  

if(isset($_GET['id_post'])){
    $id = $_GET['id_post'];

$consulta= "DELETE FROM post WHERE id_post=$id";

include '../../conexion.php';
if(mysqli_query($conexion,$consulta)){
    header('location:index.php');
}else{
    echo 'hoy no es tu dia';
}


}else{
    echo 'estas intentando borrar algo que no existe';
}

?>