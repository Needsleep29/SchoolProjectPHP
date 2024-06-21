<?php
/*
$namaHeroWuwa = "Jiyan ";
$level = 60;

if ($level < 60) {
	echo $namaHeroWuwa . "belum cukup level";
} else if ($level >= 60) {
	echo $namaHeroWuwa . "sudah cukup level";
} else {
	echo $namaHeroWuwa . "belum dimiliki";
} */

/* $namaHeroWuwa = "Jiyan ";
$level = 60;

switch ($level) {
    case 50:
        echo $namaHeroWuwa . "telah membuka skill 1";
        break;

    case 60:
        echo $namaHeroWuwa . "telah membuka skill 2";
        break;    
    
    case 70:
        echo $namaHeroWuwa . "telah membuka skill ultimate";
        break;    

    default:
        echo $namaHeroWuwa . "belum dimiliki";
        break;
} */

/* $namaHeroWuwa = "Jiyan ";
$level = 50;

$skill = $level < 60 ? $namaHeroWuwa . "belum cukup level" : $namaHeroWuwa . "sudah cukup level";
echo $skill; */

/*$level = 0;
$levelMaks = 20;

while ($level <= $levelMaks) {
    $level = $level + 1;
    echo "Level Karakter: " .$level;
    echo "<br/>";
}

/* $level = 0;
$levelMaks = 20;
for ($level; $level <= $levelMaks; $level++){
    echo "Level Hero: " .$level;
    echo "<br/>";
} 

$AnemoBoys = ["Wanderer", "Xiao", "Kazuha", "Heizhou", "Venti"];
echo $AnemoBoys[0]; 



$AnemoBoys = [
    "nama" => ["Kazuha", "Xiao"],
    "Tipe" => ["Crowd Control", "DPS"],
    "Damage" => [20000, 56000]
];

foreach ($AnemoBoys  as $key => $value) {
    foreach ($value as  $val) {
        echo $val;
        echo "<br>";
    } 
    echo "<br>";
}

foreach ($AnemoBoys  as $key => $value) {
    echo $key;
    echo "<br>";    
}

foreach ($AnemoBoys  as $key => $value) {
    echo $AnemoBoys[$key][0];
    echo "<br>";    
}
 

function luasSegitiga ($alas, $tinggi){
    $luas = 0.5 * $alas * $tinggi;
    return $luas ;
}

echo luasSegitiga(5,3); */

function sum(...$input){
    $result = 0;

    foreach ($input as $value){
        $result = $result + $value;
    }

    return $result;
}

echo sum(1,2,3);