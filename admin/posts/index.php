<?php 
//1-realizamos la conexion
include '../../header.php';
include '../../conexion.php';

if(isset($_GET['exito']) && $_GET['exito']=='modificacion'){

    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
    <strong>Holy guacamole!</strong> You should check in on some of those fields below.
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>';

}




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
        //boton añadir post
        echo "<a class='btn btn-success float-right' href='form-agregar-post.php'>Nuevo Post</a>";
        //empieza la tabla
        
    echo "<table class='table'>
        <thead>
          <tr>
            <th scope='id'>#</th>
            <th scope='col'>titulo</th>
            <th scope='col'>publicado</th>
            <th scope='col'>Modificar</th>
            <th scope='col'>Borrar</th>
            
          </tr>
        </thead>
        <tbody>";
        while($fila = mysqli_fetch_array($datos) ){
            //mostramos los datos mediante html
            include 'template-tabla-admin.php';
        
        }
        //cierro la tabla
    echo "</tbody>
    </table>";
        mysqli_close($conexion);
    }else{
        echo 'no se ha podido realizar la consulta';
    }
    
}

include '../../footer.php';
?>