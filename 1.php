<?php

function bereken() {

     for ($nu = 1; $nu <= 12; $nu++) {

         for ($v = 1; $v <= 12; $v++) {

             $result = $v * $nu;

        echo $nu  . " x " . $v . " = " . $result . PHP_EOL;

     }

 echo PHP_EOL;

    }


}

echo bereken() . PHP_EOL;

?>