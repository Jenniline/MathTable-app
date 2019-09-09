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
      
    }
    
}




function Divisiontable ($dividend,$divisor=1)
{   

    if ($divisor == 0 && $dividend == 0 )
    {
        echo "Undefined which means it's a math error";
    } 
  
    elseif ($dividend ==  0 || $divisor == 0) 
    {
        echo 0;
    }
   
    else
    {
        while ($dividend > 0) 
        {
           // for ($divisor = 2; $divisor <=12 ; $divisor++) 
          while($divisor <= 20)
            { 

                $dividedresult= $dividend / $divisor;
                
                echo $dividend . "/" . $divisor . "=" . $dividedresult ."<br>";  

                   $divisor++;
           }     
           echo "<br>";
          break;
        }         
    
    }
            
}











?>