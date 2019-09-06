<?php

if (isset($_POST['Input'])) {
    $nama =$_POST['nama'];
    $mapel1=$_POST['mapel1'];
    $mapel2=$_POST['mapel2'];
    $rata =($mapel1+$mapel2)/2;
    echo "nama : <b>$nama<br>";
    echo "mapel1 : <b>$mapel1<br>";
    echo "mapel2 : <b>$mapel2<br>";
    echo "Rata : <b>$rata<br>";

    if ($rata > 75) {
        echo "status : lulus";
        
    }else{
        echo"status : tidak lulus";
    }
}
?>