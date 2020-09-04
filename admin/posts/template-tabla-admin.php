<tr>
    <th scope="row"><?php echo $fila['id_post']; ?></th>
    <td><?php echo $fila['titulo']; ?></td>
    <td><?php echo $fila['publicado']; ?></td>
    <td><a class='btn btn-warning' href="form-modificar-post.php?id_post=<?php echo $fila['id_post']; ?>">Modificar</a></td>
    <td><a class='btn btn-danger' href="procesar-borrar-post.php?id_post=<?php echo $fila['id_post']; ?>">Borrar</a></td>
</tr>

<?php  ?>