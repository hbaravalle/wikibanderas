<!DOCTYPE html>
<html lang="en">
<?php require_once('template/head.php') ?>
<body>
  
  <?php require_once('template/header.php'); ?>
  <main>
    <div class="container">
      <div class="py-5 text-center">
        <h2>Vamo' a registrarno'</h2>
      </div>
      
      <div class="row">
        <div class="col-md-8 offset-md-2 order-md-1">
          <form class="needs-validation" novalidate>
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Nombre</label>
                <input type="text" class="form-control" name="nombre" id="input_nombre" placeholder="" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Apellido</label>
                <input type="text" class="form-control" name="apellido" id="input_apellido" placeholder="" value="" required>
              </div>
            </div>
            
            <div class="mb-3">
              <label for="email">Email</label>
              <input type="email" class="form-control" id="email" placeholder="hola@chau.com">
            </div>
            
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="firstName">Contraseña</label>
                <input type="text" class="form-control" name="nombre" id="input_nombre" placeholder="" value="" required>
              </div>
              <div class="col-md-6 mb-3">
                <label for="lastName">Repetir contraseña</label>
                <input type="text" class="form-control" name="apellido" id="input_apellido" placeholder="" value="" required>
              </div>
            </div>
            
            <button class="btn btn-primary btn-lg btn-block" type="submit">Continue to checkout</button>
          </form>
        </div>
      </div>
      <small class="text-center">Hecho con <i class="icon ion-md-heart text-danger"></i> para los alumnos de DH</small>
    </main>
    
  </div>
  
</body>
</html>