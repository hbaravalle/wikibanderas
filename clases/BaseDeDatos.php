<?php

// Esta será la clase que tenga los datos de la base de datos.
// Un detalle es que sus atributos están declarados como "const" (constantes). Esto quiere decir que no pueden ser sobreescritas. Les dejo info acerca de este tipo de "variables" en este link: https://www.php.net/manual/es/language.constants.php

class BaseDeDatos extends PDO
{
    // Estos van a ser los datos necesario para la conexion.
    // Si necesitan cambiarlos, just do it...

    const PARAM_host='localhost';
    const PARAM_port='3306';
    const PARAM_db_name='banderas';
    const PARAM_user='root';
    const PARAM_db_pass='';

    public function __construct(){
        parent::__construct('mysql:host='.BaseDeDatos::PARAM_host.';port='.BaseDeDatos::PARAM_port.';dbname='.BaseDeDatos::PARAM_db_name,BaseDeDatos::PARAM_user,BaseDeDatos::PARAM_db_pass, [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }

    public function buscarPais($id) {
        $query = parent::prepare("SELECT paises.id, paises.nombre, paises.poblacion, continentes.nombre as continente, paises.bandera FROM paises, continentes WHERE paises.nombre LIKE '%$id%' AND paises.continente_id = continentes.id");
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function allPaises() {
        $query = parent::prepare('SELECT paises.id, paises.nombre, paises.poblacion, continentes.nombre as continente, paises.bandera FROM paises, continentes WHERE paises.continente_id = continentes.id');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function allContinentes() {
        $query = parent::prepare('SELECT * FROM continentes');
        $query->execute();
        $result = $query->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    public function guardarImagenBandera($file, $pais) {
        $nombreDeOrigen = $file['bandera']['name'];
        $extension = pathinfo($nombreDeOrigen, PATHINFO_EXTENSION);
        $temporal = $file['bandera']['tmp_name'];
        $destinoFinal = dirname(__DIR__);
        $destinoFinal .= "/banderas/";
        $nombreFinal = strtolower(str_replace(" ", "_", $pais));
        $destinoFinal .= $nombreFinal . "." .$extension;
        move_uploaded_file($temporal, $destinoFinal);
        return $nombreFinal . "." . $extension;
    }

    public function guardarPais($pais) {
        $query = parent::prepare("INSERT INTO paises(nombre, poblacion, continente_id, bandera) VALUES (:nombre, :poblacion, :continente, :bandera)");
        $query->bindValue(':nombre', $pais->getNombre());
        $query->bindValue(':poblacion', $pais->getPoblacion());
        $query->bindValue(':continente', $pais->getContinente());$query->bindValue(':bandera', $pais->getBandera());

        $query->execute();
    }

}

?>