<?php 

    function find($integers){
        $odd = [];
        $even = [];
        foreach($integers as $integer){
            if($integer % 2 === 0){
                $even[] = $integer;
            }else{
                $odd[] = $integer;
            }
        }

        if(count($even)>1){
            return $odd[0];
        }else{
            return $even[0];
        }
    }