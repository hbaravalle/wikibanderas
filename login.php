<!DOCTYPE html>
<html lang="en">
<?php require_once('template/head.php'); ?>
<body>
  
  <?php require_once('template/header.php')?>
  
  <main class="__main-login">
    <div class="py-5 text-center">
      <h2>Vamo' a loguearno'</h2>
    </div>
    <form class="form-signin">
      <label for="__input-email">Email</label>
      <input type="email" name="email" id="__input_email" class="form-control mb-4" placeholder="Email address" required autofocus>
      <label for="__input_password">Contraseña</label>
      <input type="password" name="password" id="__input_password" class="form-control mb-4" placeholder="Password" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
    </form>
    <small class="text-center">Hecho con <i class="icon ion-md-heart text-danger"></i> para los alumnos de DH</small>
  </main>
  
</body>
</html>