<?php
    $name = "HelloWorld";
    $name1 = "hiiii";
    $a = 8;
    $b = 2;
    
    echo($name);
    echo($name1);
    echo(power($a));

    function name($n) {
        return $n;
    }

    // add function
    function add($a,$b) {
        return $a+$b;
    }

    // subtract function
    function subtract($a,$b) {
        return $a-$b;
    }

    // multiply function
    function multiply($a,$b) {
        return $a*$b;
    }

    // divide function
    function divide($a,$b) {
        return $a/$b;
    }

    // mod function
    function mod($a,$b) {
        return $a%$b;
    }

    // power function - $a
    function power($a) {
        return $a*$a;
    }

?>