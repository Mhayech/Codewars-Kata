<?php

    function open_or_senior($data){
        $lst = [];
        foreach($data as [$age,$handicap]){
            if($age>=55 && $handicap>7){
                $lst[] = "Senior";
            }else{
                $lst[] = "Open";
            }
        }
        return $lst;
    }