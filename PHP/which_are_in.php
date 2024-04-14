<?php

    function inArray($array1,$array2){
        $result = array();
        foreach($array1 as $str1){
            foreach($array2 as $str2){
                if(strpos($str2,$str1)!==false){
                    $result[] = $str1;
                    break;
                }
            }
        } 
        
        $result = array_unique($result);
        sort($result);
        return $result;
    }