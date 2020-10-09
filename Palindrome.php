<?php
    $original = "MOM";
    echo(Palindrome($original));
    
    function Palindrome($string) {
        if (strrev($string) == $string) {
            return "True";
        } else {
            return "False";
        }
    }

?>
