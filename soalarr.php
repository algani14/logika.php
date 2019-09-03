<?php

$aritnama = [ 'Ajeng' => 90 , 'Mamat' => 79, 'Ucup' => 66, 'Aang' => 95, 'Syahrul' => 76];

foreach ($aritnama as $nama => $nilai) {
    if ($nilai > 85) {
        echo "Nama : $nama, Nilai : $nilai, Grade A<br>";
    }
    elseif ($nilai > 75) {

        echo "Nama : $nama, Nilai : $nilai, Grade B<br>";
    }
    elseif ($nilai > 65) {
        echo "Nama : $nama, Nilai : $nilai, Grade C<br>";
    }
   
}
?>