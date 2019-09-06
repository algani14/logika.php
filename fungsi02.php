<?php
function cetak_ganjil ($awal, $akhir){
    for ($i=0; $i <$akhir ; $i++) { 
        if ($i%2 == 1) {
            echo "$i <br>";
        }
    }
}
$a =10;
$b =50;
echo "<b>bilangan ganjil dari $a sampai $b : </b><br>";
cetak_ganjil($a, $b);
echo "<hr>";
function perkenenalan($nama = "Aang"){
    echo "Nama Saya : $nama";
}
echo "<hr>";
$a="al";
perkenenalan();
?>