<?php

    function parse($data){
        $data = strtolower($data);
        $output = [];
        $value = 0;
        for($i=0;$i<strlen($data);$i++){
            $char= $data[$i];
            switch($char):
                case 'i':
                    $value += 1;
                    break;
                case 'd':
                    $value -= 1;
                    break;
                case 's':
                    $value *= $value;
                    break;
                case 'o':
                    $output[] = $value;
                    break;
                    default:
                    break;
            endswitch;
        }
        return $output;
    }