<?php

function jumlahHurufKecil($kata) {
    $total = 0;

    for($i =0; $i < strlen($kata); $i++) {
        
        if(ord($kata[$i]) > 96 && ord($kata[$i]) < 123) {
            $total++;
        }

    }

    return $total;
}

echo jumlahHurufKecil('TranSISI');