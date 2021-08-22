<!-- task  6 -->
<?php
$names = ["Maeve Millay", "Bernard Lowe", "Dolores Abernathy", "Charlotte Hale"];

foreach($names as &$name) {
    $name = str_replace('a', '', $name);
}

print_r(json_encode($names));
?>
