<?php

namespace App\Utils;
class Fonctions {

    public static function cleanInput($value){
        return htmlspecialchars(strip_tags(trim($value)));
    }
}




?>