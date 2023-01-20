<?php

// [|1|] = black
// [ 1 ] = white

function showTable() {

    for($i=1; $i<65; $i++) {

        if($i % 3 == 0 || $i % 4 == 0) {
            echo '[ '.$i.' ]';
        }else {
            echo '[|'.$i.'|]';
        }

        if($i % 8 ==0) {
            echo PHP_EOL;
        }
    }
}

echo showTable();