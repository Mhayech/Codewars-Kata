<?php

    function is_pangram($str){
        $sentence = strtolower($str);
        $letters  = [];
        for($i=0;$i<strlen($sentence);$i++){
            if(ctype_alpha($sentence[$i])){
               $letters[].=$sentence[$i];         
            }
        }
        return count(array_unique($letters)) ==26;
    }

    echo is_pangram("The quick brown fox jumps over the lazy");