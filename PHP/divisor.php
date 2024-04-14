<?php

    function divisors($integer){
        $divisors = [];
        for($i=2;$i<$integer;$i++){
            if($integer % $i === 0){
                $divisors[] =$i;
            }
            return empty($divisors) ? "$integer is prime" : $divisors;
        }
    }

    