<?php

$arr = [
    ['f', 'g', 'h', 'i'],
    ['j', 'k', 'l', 'm'],
    ['o', 'p', 'q', 'r']
];

function cari($_arr, $_word ) {
    foreach($_arr as $item) {
        if(implode('', $item) == $_word) {
            return true;
        }
    }

    return false;
}

echo cari($arr, 'fghi');