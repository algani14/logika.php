<?php
if (isset($_POST['input'])) {
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$alamat = $_POST['alamat'];
$jenis = $_POST['jenis'];
$agama = $_POST['agama'];
$asal = $_POST['asal'];
$orang = $_POST['orang'];
$ijasah = $_POST['ijasah'];
$email = $_POST['email'];

echo "<pre>";
echo "Nama                        : <b>$nama<br>";
echo "nis                         : <b>$nis<br>";
echo "alamat                      : <b>$alamat<br>";
echo "jenis kelamin               : <b>$jenis<br>";
echo "Agama                       : <b>$agama<br>";
echo "asal sekolah                : <b>$asal<br>";
echo "orang tua                   : <b>$orang<br>";
echo"mata pelajaran yang di sukai: ";
if (isset($_POST['mtk'])) {
    echo"~". $_POST['mtk']."<br>"  ;
    }
    if (isset($_POST['ips'])) {
    echo "~". $_POST['ips']."<br>" ;
    }
    if (isset($_POST['ipa'])) {
    echo "~ " . $_POST['ipa']."<br>"  ;
    }
   
}

echo "nilai ijasah smk            : $ijasah<br>";
echo "email                       : $email<br>";
if ($ijasah >23) {
    echo"selamat anda lulus";
}else {
    echo"anda tidak lulus";
}
echo"</pre>";
?>
