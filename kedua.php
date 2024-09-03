<?php

function kelilingLingkaran($jari) : float {
    $keliling = 2 * 3.14 * $jari;
    return $keliling;
}

function volumeBola($jari) : float {
    $volume = (4 / 3) * 3.14 * $jari * $jari * $jari;
    return $volume;
}

function volumeTabung($jari, $tinggi) : float {
    $volume = 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

function volumeKerucut($jari, $tinggi) : float {
    $volume = (1 / 3) * 3.14 * $jari * $jari * $tinggi;
    return $volume;
}

$jari = 45;
$tinggi = 100;

$keliling = kelilingLingkaran($jari);
echo "Keliling lingkaran dengan jari-jari {$jari} adalah {$keliling}\n";

$volume_bola = volumeBola($jari);
echo "Volume bola dengan jari-jari {$jari} adalah {$volume_bola}\n";

$volume_tabung = volumeTabung($jari, $tinggi);
echo "Volume tabung dengan jari-jari {$jari} dan tinggi {$tinggi} adalah {$volume_tabung}\n";

$volume_kerucut = volumeKerucut($jari, $tinggi);
echo "Volume kerucut dengan jari-jari {$jari} dan tinggi {$tinggi} adalah {$volume_kerucut}\n";
