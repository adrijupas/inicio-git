<?php include '../../header.php' ?>

<form action="procesar-agregar-post.php" method="post">

<div class="form-group">
    <label for="titulo">Titulo</label>
    <input class="form-control" type="text" name="titulo" id="titulo">
</div>
<div class="form-group">
    <label for="contenido">Contenido</label>
    <textarea class="form-control" name="contenido" id="contenido" cols="30" rows="10">
    
    </textarea>
</div>
<div class="form-group">
    <label for="temas">Categorias</label>
    <input class="form-control" type="text" name="temas" id="temas">
</div>
    <button class="btn btn-primary" type="submit">Añadir Post</button>


</form>

<?php include '../../footer.php' ?>