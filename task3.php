<!-- task 3 -->
<?php

$a = ['a', 'c', 'd', 'g', 'i'];
$b = ['x', 'z', 'n', 'k', 'd', 'l', 'a', 'm', 'n'];

$commonElements = array_intersect($a, $b);

$result =implode(",",$commonElements);
echo "The common elements are: ".$result;

?>
