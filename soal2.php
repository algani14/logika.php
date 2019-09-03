<?php

$indo=75;
$mtk=75;
$rata=($indo+$mtk)/2;


if ($indo>100) {
    echo"Nama : Muhammad Alghani<br>
        Kelas : XI RPL 2<br>
        <hr>
        nilai indonesia : $indo<br>
        nilai mtk :$mtk<br>
        keterangan : tidak sesuai<br>
        grade : -";
}elseif ($mtk>100) {
    echo"Nama : Muhammad Alghani<br>
        Kelas : XI RPL 2<br>
        <hr>
        nilai indonesia : $indo<br>
        nilai mtk :$mtk<br>
        keterangan : tidak sesuai<br>
        grade : -";
}elseif ($indo<0) {
    echo"Nama : Muhammad Alghani<br>
        Kelas : XI RPL 2<br>
        <hr>
        nilai indonesia : $indo<br>
        nilai mtk :$mtk<br>
        keterangan : tidak sesuai<br>
        grade : -";
}elseif ($mtk<0) {
    echo"Nama : Muhammad Alghani<br>
        Kelas : XI RPL 2<br>
        <hr>
        nilai indonesia : $indo<br>
        nilai mtk :$mtk<br>
        keterangan : tidak sesuai<br>
        grade : -";
}
elseif ($rata >= 85) {
        echo"Nama : Muhammad Alghani<br>
        Kelas : XI RPL 2<br>
        <hr>
        nilai indonesia : $indo<br>
        nilai mtk :$mtk<br>
        nilai rata : $rata<br>
        keterangan : lulus<br>
        grade : A";
}elseif ($rata >= 75) {
    echo"Nama : Muhammad Alghani<br>
        Kelas : XI RPL 2<br>
        <hr>
        nilai indonesia : $indo<br>
        nilai mtk :$mtk<br>
        nilai rata : $rata<br>
        keterangan : lulus<br>
        grade : B";
}elseif ($rata>=60) {
    echo"Nama : Muhammad Alghani<br>
        Kelas : XI RPL 2<br>
        <hr>
        nilai indonesia : $indo<br>
        nilai mtk :$mtk<br>
        niai rata : $rata<br>
        keterangan : tidak lulus<br>
        grade : C";
    
}elseif ($rata<=60) {
    echo"Nama : Muhammad Alghani<br>
        Kelas : XI RPL 2<br>
        <hr>
        nilai indonesia : $indo<br>
        nilai mtk :$mtk<br>
        nilai rata : $rata<br>
        keterangan : lulus<br>
        grade : D";
}
?>