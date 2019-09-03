<?php
$array = array('saya <br>', 10);
$aso = [
    [
        'Nama' => 'Muhammad Alghani',
        'Kelas'=> 'XI RPL 2',
    ],
    ' ',
    [
        'Nama' => 'abang',
        'Kelas'=> 'XI RPL 2',   
    ]
];

    foreach ($aso as $value) {
        echo $value["Nama"] . "<br>";
        echo $value["Kelas"] . "<br>";
    }
    echo '<hr>';
    $countaso = count ($aso);
    for ($i=0; $i < $countaso ; $i++) { 
        echo $aso [$i]["Nama"] . "<br>";
        echo $aso [$i]["Kelas"] . "<br>";
    }
?>