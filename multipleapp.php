<?php

function Timestable($multiplier)
{
    while ($multiplier <= 12) {
 

        for($multiple =1; $multiple <= 12 ; $multiple++) {
            $product = $multiple*$multiple;
            echo $multiplier. "*". $multiple . "=" . $product . "<br>";
        }
        echo "<br>";

        break;
       //   $multiplier++;
    }
    
}

Timestable(6    );




/*for ($multiplier=1; $multiplier <=12 ; $multiplier++) { 

    for ($multiple=1; $multiple <=12 ; $multiple++) { 
        $product = $multiplier*$multiple;
        echo  $multiplier . "*" . $multiple . "=" . $product . "<br>";
    }
    echo "<br>";
 }*/
        



?>