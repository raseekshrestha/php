<?php
$array1 = array(11, 22, 13);
$array2 = array(13, 14, 15);

$union = array_unique(array_merge($array1, $array2));

// Display the result
echo "Array 1: " . implode(", ", $array1) . "<br>";
echo "Array 2: " . implode(", ", $array2) . "<br>";
echo "Union Array: " . implode(", ", $union) . "<br>";
?>
