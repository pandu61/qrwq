<?php

$nilai = [
            '72', '65', '73', '78', '75', '74', '90', '81', '87', '65', 
            '55', '69', '72', '78', '79', '91', '100', '40', '67', '77', '86'
        ];

function getRataRata($data) {
    $totalNilai = 0;
    $jumlahData = 0;

    foreach($data as $item) {
        $totalNilai += $item;
        $jumlahData++;
    }

    return $totalNilai / $jumlahData;
}

function getTertinggi($data) {
    $tertinggi = -1;

    foreach($data as $item) {
        if($item > $tertinggi) {
            $tertinggi = $item;
        }
    }

    return $tertinggi != -1 ? $tertinggi : null ;
}

function getTerendah($data) {
    $terendah = 9999;

    foreach($data as $item) {
        if($item < $terendah) {
            $terendah = $item;
        }
    }

    return $terendah != 9999 ? $terendah : null ;
}

echo "nilai rata rata : " . getRataRata($nilai);
echo "\nnilai tertinggi : " . getTertinggi($nilai);
echo "\nnilai terendah : " . getTerendah($nilai);
