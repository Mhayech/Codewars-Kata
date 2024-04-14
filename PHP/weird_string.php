<?php

    function toWeirdCase($string){
        $str_to_array = explode(' ',$string);
        for($i=0;$i<count($str_to_array);$i++){
            for($j=0;$j<strlen($str_to_array[$i]);$j++){
                if($j%2===0){
                    $str_to_array[$i][$j]=strtoupper($str_to_array[$i][$j]);
                }else{
                    $str_to_array[$i][$j]=strtolower($str_to_array[$i][$j]);
                }
            }
            }
            return implode(' ',$str_to_array);
        }
    echo toWeirdCase('wEll i GuesS you passed');