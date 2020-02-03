<?php

require_once('autoload.php');

?>

<!DOCTYPE html>
<html lang="en">
<?php require_once 'template/head.php' ?>
<body>
    
    <?php require_once 'template/header.php' ?>
    
    <main>
        
        <section id="__seccion-busqueda">
            <div class="container">
                <form action="" method="get">
                    <div class="__input-group">
                        <input type="text" placeholder="Buscar un país...">
                        <input type="submit">
                    </div>
                </form>
            </div>
        </section>
        
        <section id="__seccion-listado-banderas">
            <div class="container">
                <div class="row">

                    <div class="col-6 col-lg-4 col-xl-3 mb-5">
                        <div class="card __card-bandera">
                            <img src="<?php ?>" alt="Bandera de <?php ?>">
                            <div class="card-body">
                                <h4 class="card-title"><?php ?></h4>
                                <ul>
                                    <li><strong>Población:</strong> <?php ?></li>
                                    <li><strong>Region:</strong> <?php ?></li>
                                    <li><strong>Capital:</strong> <?php ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>
        <small class="text-center">Hecho con <i class="icon ion-md-heart text-danger"></i> para los alumnos de DH</small>
    </main>
    
    
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>