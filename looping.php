<?php
echo "<pre>";

$lebar_diamond = 9;
$tinggi_persegi = 9;
$lebar_persegi = 11;

// Cetak persegi panjang
for ($i = 1; $i <= $tinggi_persegi; $i++) {
    for ($j = 1; $j <= $lebar_persegi; $j++) {
        // Cek apakah sedang di tepi atau bukan
        if ($i == 1 || $i == $tinggi_persegi || $j == 1 || $j == $lebar_persegi) {
            echo "*";
        } else {
            // Cetak diamond di dalam persegi panjang
            if ($i > ($tinggi_persegi - $lebar_diamond) / 2 && $i <= ($tinggi_persegi + $lebar_diamond) / 2) {
                $mid = ($tinggi_persegi + 1) / 2;
                $space = abs($mid - $i);
                if ($j > ($lebar_persegi - $lebar_diamond) / 2 + $space && $j <= ($lebar_persegi + $lebar_diamond) / 2 - $space && ($j - $space) % 2 == 1) {
                    echo "*";
                } else {
                    echo "&nbsp;";
                }
            } else {
                echo "&nbsp;";
            }
        }
    }
    echo "<br>";
}
?>