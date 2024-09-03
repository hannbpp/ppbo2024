<?php
$nama = readline('Masukkan nama Anda: ');

$jam = date('H');
$menit = date('i');

if ($jam >= 5 && $jam < 11) {
    $sapaan = "Selamat Pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat Siang";
} elseif ($jam >= 15 && $jam < 19) {
    $sapaan = "Selamat Sore";
} else {
    $sapaan = "Selamat Malam";
}

echo "{$sapaan}, {$nama}, sekarang pukul {$jam}:{$menit}\n";

