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

    public function allBanderas() {
        $query = parent::prepare('SELECT * FROM paises');
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

}

?>