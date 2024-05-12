<?php 

function beeramid($bonus, $price) {
    $total_beers = intdiv($bonus, $price);
    $total = 0;
    $n = 1;
    while($total+$n**2 <= $total_beers){
        $total += $n**2;
        $n++;
    }
    return $n-1;
}