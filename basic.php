<?php
    $name = "HelloWorld";
    $name1 = "hiiii";
    $a = 8;
    $b = 2;
    $c = 5;
    
    echo($name);
    echo($name1);
    echo(powerA($a));
    echo(powerB($b));
    echo(squareRootA($a));
    echo(squareRootA($b));
    
    function name($n) {
        return $n;
    }

    // add function - a+b
    function add($a,$b) {
        return $a+$b;
    }

    // add function - a+c
    function add($a,$c) {
        return $a+$c;
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
    function powerA($a) {
        return $a*$a;
    }

    // power function - $b
    function powerB($b) {
        return $b*$b;
    }

    // square root - A
    function squareRootA($a) {
        return sqrt($a);
    }
    
    // square root - B
    function squareRootA($b) {
        return sqrt($b);
    }
?>