<?php
if (isset($_POST['sbm'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $nomer=0;
    $nomer2=0;

    

    foreach ($nama as $data => $s) {
        echo "Nama : " . $nama[$data].
        " = Kelas : " . $kelas[$data] . "<hr>";
    }
}
?>