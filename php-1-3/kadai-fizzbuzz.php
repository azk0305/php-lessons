<?php
    $max = 100;
    
    for($i = 1; $i <= $max; $i++) {
        print fizzbuzz($i) . PHP_EOL;
    }
    
    function fizzbuzz($num) {
        $ret = "";
        
        if ($num % 3 == 0) {
            $ret .= "Fizz";
        }
        if ($num % 5 == 0) {
            $ret .= "Buzz";
        }
        
        if ($ret !== "") {
            return $ret;
        }
        
        return $num;
    }
?>