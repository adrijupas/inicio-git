<?php include '../../header.php' ?>

<h2 class="text-center">Registro De Usuarios</h2>
<form action="procesar-agregar-usuario.php" method="post">

<div class="form-group">
    <label for="nombre">Nombre</label>
    <input class="form-control" type="text" name="nombre" id="nombre">
</div>
<div class="form-group">
    <label for="email">Email</label>
    <input class="form-control" type="email" name="email" id="email">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input class="form-control" type="password" name="password" id="password">
</div>

<button class="btn btn-primary mb-2" type="submit">Añadir Usuario</button>


</form>

<?php include '../../footer.php' ?>