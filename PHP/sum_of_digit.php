<?php

    function sum_of_digits($num){

        while($num>9){
            $num = array_sum(str_split((string)$num));
        }
        return $num;
    }