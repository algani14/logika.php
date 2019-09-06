<?php

function tambah_string (&$str){
    $str = $str . " , Jakarta";
    return $str;
}
$str = "universitas budi luhun";
echo "\$str = $str<br>";
echo tambah_string($str)."<br>";
echo "\$str  = $str<br>";

?>