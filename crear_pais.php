<?php

require_once 'autoload.php';

try {
    $conexion = new BasedeDatos();
} catch(PDOException $exception) {
    echo $exception->getMessage();
}

$continentes = $conexion->allContinentes();

if($_POST) {
    $imagenBandera = ($_FILES) ? $conexion->guardarImagenBandera($_FILES, $_POST['nombre']) : "";
    $pais = new Pais($_POST['nombre'], $_POST['poblacion'], $_POST['continente'], $imagenBandera);
    Helper::pre($pais);
    $conexion->guardarPais($pais);
};


?>


<!DOCTYPE html>
<html lang="en">
<?php require_once('layout/head.php') ?>
<body>
    
    <?php require_once('layout/header.php'); ?>
    <main>
        <div class="container">
            <div class="py-5 text-center">
                <h2>Crear país</h2>
            </div>
            
            <div class="row">
                <div class="col-md-8 offset-md-2 order-md-1">
                    <form method="post" action="" enctype="multipart/form-data">
                        
                        <div class="form-group mb-3">
                            <label for="__input-nombre">Nombre</label>
                            <input type="text" name="nombre" class="form-control" id="__input-nombre" placeholder="Ej.: Holanda">
                        </div>
                        
                        <div class="form-group mb-3">
                            <label for="__input-poblacion">Población</label>
                            <input type="text" name="poblacion" class="form-control" id="__input-poblacion" placeholder="Ej.: 200000">
                        </div>
                        
                        <div class="form-group">
                            <label for="__input-continente">Continente</label>
                            <select class="form-control" name="continente" id="__input-continente">
                                <option value="">Elegir un continente...</option>
                                <?php foreach($continentes as $continente): ?>
                                <option value="<?= $continente['id']?>"><?= $continente['nombre'] ?></option>
                                <?php endforeach; ?>
                                
                            </select>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="__input-bandera">Cargar imagen</label>
                            <input type="file" name="bandera" class="form-control-file" id="__input-bandera">
                        </div>              
                        
                        <button class="btn btn-primary btn-lg btn-block" type="submit">Crear país</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <?php require_once 'layout/footer.php' ?>
    <?php require_once 'layout/scripts.php' ?>
    
</body>
</html>