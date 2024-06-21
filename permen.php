<?php
// jumlah permen 100jt
$jumlah_permen = 100000000;

// jumlah permen tambahan yang diperoleh
$permen_tambahan = floor($jumlah_permen / 5);

// total permen setelah mendapatkan bonus
$total_permen = $jumlah_permen + $permen_tambahan;

echo "Jumlah permen awal: " . $jumlah_permen . "<br>";
echo "Permen tambahan yang diperoleh: " . $permen_tambahan . "<br>";
echo "Total permen setelah mendapatkan bonus: " . $total_permen;
?>