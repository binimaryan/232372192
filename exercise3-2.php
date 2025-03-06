<?php
$first = 0;
$second = 1;
$count = 0;

while ($count < 10) {
    $next = $first + $second;
    $first = $second;
    $second = $next;

    if ($next % 2 == 0) {
        echo $next . "\n";
    }
    
    $count++;
}
?>