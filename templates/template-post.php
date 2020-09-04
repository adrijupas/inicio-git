
<div class="card">
  <img src="imagenes/<?php echo $imagen = $fila['imagen_destacada'];  ?> " class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $fila['titulo']; ?></h5>
    <p class="card-text"><?php echo $fila['contenido']; ?></p>
    <a href="mostrar-post.php?id_post=<?php echo $fila['id_post']; ?>" class="btn btn-primary">Ver todo</a>
  </div>
</div>

