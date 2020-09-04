<?php include '../../header.php' ?>

<?php 

if(isset($_GET['id_post'])){
    $id = $_GET['id_post'];
    $consulta = "SELECT * FROM post WHERE id_post = $id";
    include '../../conexion.php';
    if($datos = mysqli_query($conexion, $consulta)){
        //recorremos la consulta
        //aqui usaremos los datos
        while($fila = mysqli_fetch_array($datos)) :?>

        
<form action="procesar-modificar-post.php" method="post">

<div class="form-group">
    <label for="id_post">Titulo</label>
    <input readonly value='<?php echo $fila['id_post']?>' class="form-control" type="text" name="id_post" id="id_post">
</div>
<div class="form-group">
    <label for="titulo">Titulo</label>
    <input value='<?php echo $fila['titulo']?>' class="form-control" type="text" name="titulo" id="titulo">
</div>
<div class="form-group">
    <label for="contenido">Contenido</label>
    <textarea value='<?php echo $fila['contenido']?>' class="form-control" name="contenido" id="contenido" cols="30" rows="10">
    
    </textarea>
</div>
<div class="form-group">
    <label for="temas">Categorias</label>
    <input value='<?php echo $fila['temas']?>' class="form-control" type="text" name="temas" id="temas">
</div>
    <button class="btn btn-primary" type="submit">Añadir Post</button>


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