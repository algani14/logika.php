<?php

function segitiga($alas,$tinggi){
    
echo"<h1>luas segitiga</h1>";
    echo "alas = $alas <br>";
    echo "tinggi = $tinggi<br>";
    $luas=($alas*$tinggi)/2;
    echo "hasil = $luas";



}

segitiga(5, 10 );
echo"<hr>";

function lingkaran($diameter ,$jari, $luas){
    echo "<h1>keliling lingkaran</h1>";
    echo "diameter = $diameter<br>";
    echo "jari -jari = $jari<br>";
    echo "luas = $luas " ;
}
$d=10;
$r= $d/2;
$v=3.14;
$luas=$r*$r*$v;
lingkaran($d,$r,$luas);


 

?>