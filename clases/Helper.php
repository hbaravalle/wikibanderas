<?php

abstract class Helper
{
    public static function pre($algo) {
        echo "<pre>";
        var_dump($algo);
        echo "</pre>";
    }
}

?>