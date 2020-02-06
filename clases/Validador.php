<?php

class Validador
{
    function persistirDato($metodo, $campo) {
        if($metodo === "post") {
            return "";
        }
        else if($metodo === "get") {
            if(isset($_GET[$campo])) {
                return $_GET[$campo];
            } else {
                return "";
            }
        }
    }
}

?>