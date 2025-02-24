<?php 

class Validator {

    public static function string($string, $min = 1, $max = INF)
    {
        $value = trim($string);

        return strlen($value) > $min && strlen($value) < $max;
    }

    public static function email($email)
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

}


?>