<!-- task 7 -->
<?php

function password($password){

    $number = preg_match('@[0-9]@', $password);                     
    $capitalLetter = preg_match('@[A-Z]@', $password);
    $lowerLetter = preg_match('@[a-z]@', $password);
    $specialChar = preg_match('@[^\w]@', $password);
 
    if(strlen($password) < 8 || strlen($password) > 14 || !$number || !$capitalLetter || !$smallLetter || !$specialChar) {
        return 0;
    } else {
        return 1;
    }

}

echo password("jjkjkjkAa1@");

?>
