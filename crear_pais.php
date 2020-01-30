<?php
			
$dbDSN = "mysql:host=localhost; dbname=banderas; charset=utf8mb4";
$dbUsuario = 'root';
$dbPass = '';

try {
    $conexion = new PDO($dbDSN, $dbUsuario, $dbPass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch(PDOException $exception) {
    echo $exception->getMessage();
}

if($_POST) {
    // Recuerden validar que los datos sean correctos
    
}

?>


<!DOCTYPE html>
<html lang="en">
<?php require_once('template/head.php') ?>
<body>
    
    <?php require_once('template/header.php'); ?>
    <main>
        <div class="container">
            <div class="py-5 text-center">
                <h2>Crear país</h2>
            </div>
            
            <div class="row">
                <div class="col-md-8 offset-md-2 order-md-1">
                    <form method="post" action="">
                        
                        <div class="form-group mb-3">
                            <label for="__input-nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="__input-nombre" placeholder="Ej.: Holanda">
                        </div>

                        <div class="form-group mb-3">
                            <label for="__input-poblacion">Población</label>
                            <input type="text" name="poblacion" class="form-control" id="__input-poblacion" placeholder="Ej.: 200000">
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="__input-bandera">Cargar imagen</label>
                            <input type="file" name="bandera" class="form-control-file" id="__input-bandera">
                        </div>              
                        
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Crear país</button>
                    </form>
                </div>
            </div>
            <small class="text-center">Hecho con <i class="icon ion-md-heart text-danger"></i> para los alumnos de DH</small>
        </main>
        
    </div>
    
</body>
</html>