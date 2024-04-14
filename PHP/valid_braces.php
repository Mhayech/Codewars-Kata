<?php

function validBraces($braces){
    $stack = [];
    $match = array(')'=>'(','}'=>'{',']'=>'[');
    for($i=0;$i<strlen($braces);$i++){
        $char = $braces[$i];
        if(in_array($char,['(','{','['])){
            array_push($stack,$char);
        }elseif(in_array($char,[')',']','}'])){
            if(empty($stack) || $stack[count($stack)-1] != $match[$char]){
                return false;
            }else{
                array_pop($stack);
            }
        }
    return empty($stack);
    }

}