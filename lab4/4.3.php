<?php
function factorial($number) {
    $fact = 1;
    for ($i = 2; $i <= $number; $i++) {
        $fact *= $i;
    }

    return $fact;
}

$num = 5;
echo "factorial of {$num} is ".factorial(5);

?>