<?php

function unigram($kalimat) {
    return str_replace(' ', ', ', $kalimat);
}

function bigram($kalimat) {
    $kalimat = explode(' ', $kalimat);
    $result = '';

    $i = 1;
    foreach($kalimat as $item) {
        $result .= $item;

        if($i % 2 == 0 && $i != sizeof($kalimat)) {
            $result .= ',';
        }

        $result .= ' ';
        $i++;
    }

    return $result;
}

function trigram($kalimat) {
    $kalimat = explode(' ', $kalimat);
    $result = '';

    $i = 1;
    foreach($kalimat as $item) {
        $result .= $item;

        if($i % 3 == 0 && $i != sizeof($kalimat)) {
            $result .= ',';
        }

        $result .= ' ';
        $i++;
    }

    return $result;
}

echo "unigram : " . unigram('Jakarta adalah ibukota negara republik indonesia');
echo "\nbigram : " . bigram('Jakarta adalah ibukota negara republik indonesia');
echo "\ntrigram : " . trigram('Jakarta adalah ibukota negara republik indonesia');