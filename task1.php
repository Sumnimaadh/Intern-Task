<!-- task 1 -->


<?php

// To sort the given array in ascending order:
echo "Ascending order: ";
$a= array(3,1,5,13,18,2,4);
$arraylength = count($a);

sort($a);
for ($i = 0; $i < $arraylength; $i++)
{
	echo $a[$i];
	echo " , ";
}
// To sort the given array in descending order: 
echo "Descending order: ";
rsort($a);			
for ($i = 0; $i < $arraylength; $i++)
{
	echo $a[$i];
	echo " , ";
}

?>


