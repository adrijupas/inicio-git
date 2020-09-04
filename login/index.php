<?php 

include '../header.php';

?>
<div class="container">
    <form class="form-signin" method="POST" action="autentificacion.php" novalidate>
      <img
        class="mb-4"
        src="bootstrap-solid.svg"
        alt=""
        width="72"
        height="72"
      />
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="email" class="sr-only">Email address</label>
      <input
        type="email"
        id="email"
        name="email"
        class="form-control"
        placeholder="Direccion de email"
        required
        autofocus
      />
      <label for="password" class="sr-only">Password</label>
      <input
        type="password"
        id="password"
        name="password"
        class="form-control"
        placeholder="Contraseña"
        required
      />
      
      <button class="btn btn-lg btn-primary btn-block" type="submit">
        Iniciar Sesión
      </button>
      
    </form>
</div>

<?php  

include '../footer.php';

?>