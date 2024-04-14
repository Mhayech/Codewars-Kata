<?php

function find_missing_letter(array $array): string {
  $ascii = array_map(fn($char) => ord($char), $array);
  for($i=0;$i<count($ascii)-1;$i++){
    if($ascii[$i+1] - $ascii[$i] != 1){
      return chr($ascii[$i]+1);
  }
  }
  return null;
}