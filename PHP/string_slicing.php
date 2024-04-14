<?php

    function solution($str){
        if(strlen($str)%2 !== 0){
            $str.='_';
        }

        $lst = [];
        for($i=0;$i<strlen($str);$i+=20){
            $lst[] = substr($str,$i,2);
        }
        return $lst;
    }