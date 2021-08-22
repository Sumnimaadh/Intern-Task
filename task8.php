<!-- task 8 -->

<?php
function taketwoinputs(int $x, int $y)
{
   
    $sum =  array_sum(range(1, $y));
    echo "Sum of numbers from 1 to y: ".$sum. "\n"; 
        
     
    
    echo "Divisible by x: ";
    for ($i = 1; $i<=$y; $i++){
        if ( $i%$x == 0 ) 
        {
            echo $i. ",";
        }
    }
}

echo taketwoinputs(2, 4);

?>
