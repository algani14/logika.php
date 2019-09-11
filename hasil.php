<?php
if (isset($_POST['input'])) {
$nm = $_POST['nm'];
$nip = $_POST['nip'];
$jenis = $_POST['jenis'];
$alm = $_POST['alm'];
$status = $_POST['status'];
$jabatan = $_POST['jabatan'];
$golongan = $_POST['golongan'];


echo "<pre>";
echo "<h3 align = 'right'>". date("d/m/Y H:i:s")."</h3>";
echo "Nama                        : <b>$nm<br>";
echo "NIP                         : <b>$nip<br>";
echo "Jenis Kelamin               : <b>$jenis<br>";
echo "Alamat                      : <b>$alm<br>";
echo "Status                      : <b>$status<br>";
echo "Jabatan                     : <b>$jabatan<br>";
echo "potongan                    :";
if (isset($_POST['bpjs'])) {
    echo" ". $_POST['bpjs']."<br>"  ;
    }
    if (isset($_POST['kp'])) {
    echo " ". $_POST['kp']."<br>" ;
    }
    if (isset($_POST['jamsostek'])) {
    echo " " . $_POST['jamsostek']."<br>"  ;
    }
   
}
echo "Golongan                    : $golongan<br>";
echo"<hr>";

echo "<b>KETERANGAN</b>";
echo "<br>";

if ($golongan == "A1") {
   $gol = 250000;
}elseif ($golongan == "A2") {
   $gol = 200000;
}elseif ($golongan == "A3") {
    $gol =150000;
}

if ($status == "menikah") {
    $st=100000;
}elseif ($status == "belum") {
    $st=50000;
}

if ($jabatan == "hrd") {
    $ja=5000000;
}elseif ($jabatan == "manager") {
    $ja=4500000;
}elseif ($jabatan == "staff") {
    $ja=3000000;
}elseif ($jabatan == "karyawan") {
    $ja=2500000;
}

if ("bpjs") {
    $potongan1=250000;
    $po=$potongan1;
}if ("kp") {
    $potongan2=150000;
    $po= $potongan1 + $potongan2;
}if ("jamsostek") {
    $potongan3=150000;
    $po= $potongan1 + $potongan2 + $potongan3;
}



if ($golongan == "A1") {
    echo"A1             : 250.000";
}elseif ($golongan == "A2") {
    echo"A2             : 200.000";
}elseif ($golongan == "A3") {
    echo"A3             : 150.000";
}
echo "<br>";
if ($status == "menikah") {
    echo "menikah        : 100.000";
}elseif ($status == "belum") {
    echo "belum menikah  : 50.000";
}
echo "<br>";
if ($jabatan == "hrd") {
    echo "hrd            : 5jt";
}elseif ($jabatan == "manager") {
    echo"manager        : 4.5jt";
}elseif ($jabatan == "staff") {
    echo "staff         : 3jt"; 
}elseif ($jabatan == "karyawan") {
    echo "keryawan      : 2.5jt";
}
echo "<br>";
if (isset($_POST['bpjs'])) {
    echo "bpjs           : 250rb,"  ;
    }
    if (isset($_POST['kp'])) {
    echo " koperasi      : 150rb," ;
    }
    if (isset($_POST['jamsostek'])) {
    echo " jamsostek      : 150rb"  ;
    }
    echo "<br>";

    $kotor=$gol + $st + $ja - $po;
    echo "gaji kotor     : $kotor";
    echo "<br>";
    $pajak=($kotor * 2.5/100);
    echo "pajak          : $pajak";
    echo "<br>";
    $bersih=$kotor - $pajak;
    echo "gaji bersih    : $bersih";

   

echo "<br>";



echo"</pre>";
?>
