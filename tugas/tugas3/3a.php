<?php

echo "<h4>Menghitung luas lingkaran</h4>";

function hitungLuaslingkaran($r) {
    $luas = M_PI * $r * $r;
    return $luas;
}

$r = 10;
$luasLingkaran = hitungLuaslingkaran($r);

echo "<p>Jari-jari = $r cm</p>";
echo "<p>Luas lingkaran = $luasLingkaran cm<sup>2</sup></p>";

echo "<hr>";

echo "<h4>Menghitung keliling lingkaran</h4>";

function hitungKelilingLingkaran($r) {
    $keliling = 2 * M_PI * $r;
    return $keliling;
}

$r = 20;
$kelilingLingkaran = hitungKelilingLingkaran($r);

echo "<p>Jari-jari = $r cm</p>";
echo "<p>Keliling lingkaran = $kelilingLingkaran cm</p>";

?>