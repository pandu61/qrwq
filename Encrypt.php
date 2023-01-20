<?php

function encrypt($word){
    $result = '';

    for($i = 0; $i < strlen($word); $i++) {
        $ord = ord($word[$i]);
        
        if( ($i+1) % 2 != 0 ) {
            $result .= chr($ord + ($i+1));       
        }else {
            $result .= chr($ord - ($i+1));
        }
    }

    return $result;
}

echo encrypt('DFHKNQ');