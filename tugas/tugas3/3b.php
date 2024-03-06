<?php

function urutanAngka($angka) {
    $urut = 1;
    for ($i = 1; $i <= $angka; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo $urut . " ";
            $urut++;
        }
        echo "<br>";
    }
}

echo urutanAngka(5);

?>