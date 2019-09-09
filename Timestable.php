<?php

 
     for ($multiplier=1; $multiplier <=12 ; $multiplier++) { 

        for ($multiple=1; $multiple <=12 ; $multiple++) { 
            $product = $multiplier*$multiple;
            echo  $multiplier . "*" . $multiple . "=" . $product . "<br>";
        }
        echo "<br>";
     }
            

?>