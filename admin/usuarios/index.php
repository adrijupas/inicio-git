<?php 
include '../../header.php';

if(isset($_GET['exito']) && $_GET['exito']=='modificacion'){

    echo '<div class="alert alert-success" role="alert">
    Has modificado los datos del usuario con exito!
  </div>';

}


echo '<a class="btn btn-success mb-2" href="form-agregar-usuario.php">Añadir Usuario</a>';

// index.php de usuarios Mostrara lista de usuarios de la tabla usuarios de la base de datos
//realizamos la conexion incluyendo el archivo conexion.php
include '../../conexion.php';

if(!$conexion):
    echo 'no se ha podido establecer la conexion';
else:
    //hemos preparado la consulta a la base de datos, a la tabla de usuarios
    $consulta = "SELECT * FROM USUARIOS";
    //Ejecutamos la consulta
    $datos = mysqli_query($conexion,$consulta);
    if($datos){
        echo '<table>
        <th>id</th>
        <th>nombre</th>
        <th>email</th>
        <th>password</th>
        <th>Modificar</th>
        <th>Borrar</th>
        ';
        while($fila = mysqli_fetch_array($datos)){
            //muestra las filas
            include 'template-tabla-usuarios.php';
        } //aqui termina el loop while
        echo '</table>';
    }else{
        echo 'Ha fallado la consulta';
    }
    

endif;





include '../../footer.php';