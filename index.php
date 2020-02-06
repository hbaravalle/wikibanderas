<?php

require_once('autoload.php');
$conexion = new BaseDeDatos();
$paises = $conexion->allPaises();

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once 'layout/head.php' ?>
<body>
    
    <?php require_once 'layout/header.php' ?>
    
    <main>
        
        <section id="__seccion-busqueda">
            <div class="container">
                <form action="resultadoBusqueda.php" method="get">
                    <div class="__input-group">
                        <input type="text" name="pais" placeholder="Buscar un país...">
                        <input type="submit">
                    </div>
                </form>
            </div>
        </section>
        
        <section id="__seccion-listado-banderas">
            <div class="container">
                <div class="row">

                <?php foreach($paises as $pais): ?>
                    <div class="col-6 col-lg-4 col-xl-3 mb-5">
                        <div class="card __card-bandera">
                            <img src="banderas/<?= $pais['bandera'] ?>" alt="Bandera de <?= $pais['nombre'] ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?= $pais['nombre'] ?></h4>
                                <ul>
                                    <li><strong>Población:</strong> <?= $pais['poblacion'] ?></li>
                                    <li><strong>Region:</strong> <?= $pais['continente'] ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                    
                </div>
            </div>
        </section>
    </main>
    
    <?php require_once 'layout/footer.php' ?>
    <?php require_once 'layout/scripts.php' ?>
    
</body>

</html>