<?php include '../../header.php' ?>

<?php 

if(isset($_GET['id_usuario'])){
    $id = $_GET['id_usuario'];
    //preparamos la consulta
    $consulta = "SELECT * FROM usuarios WHERE id_usuario = $id";
    //incluimos la conexion
    include '../../conexion.php';
    //ejecutamos la consulta
    if($datos = mysqli_query($conexion, $consulta)){
        //recorremos la consulta
        //aqui usaremos los datos
        while($fila = mysqli_fetch_array($datos)) :?>

     <h2 class="text-center">Modificar Usuario</h2>   

<form action="procesar-modificar-usuario.php" method="post">

<div class="form-group">
    <label for="id_usuario">ID</label>
    <input value='<?php echo $fila['id_usuario']?>' class="form-control" type="text" name="id_usuario" id="id_usuario" readonly>
        </div>
<div class="form-group">
    <label for="nombre">Nombre</label>
    <input value='<?php echo $fila['nombre']?>' class="form-control" type="text" name="nombre" id="nombre">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input value='<?php echo $fila['email']?>' class="form-control" type="email" name="email" id="email">
    
    
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input value='<?php echo $fila['password']?>' class="form-control" type="text" name="password" id="password">
</div>
    <button class="btn btn-primary" type="submit">Añadir Usuario</button>


</form>
        <?php
        endwhile;
        mysqli_close($conexion);
    }else{
        echo 'consulta no existe';
    }
}
        ?>



<?php include '../../footer.php' ?>