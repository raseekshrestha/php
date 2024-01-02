<?php
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}

$sum = 0;
for ($i = 2;$i<200;$i++){
    if (isPrime($i)) {
        $sum += $i;
    }
}
echo "sum of prime number less than 200 is : ".$sum;


?>
