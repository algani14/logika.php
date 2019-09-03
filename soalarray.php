<?php
$array = array('<strong>Judul </strong>', 'Penulis');
$aso = [
    [
        'Judul' => ' <strong>Belajar PHP & Mysql untuk pemula </strong> <br>',
        'penulis'=> '  admin SMK ',
    ],
    
    [
        'Judul' => ' <strong>Tutorial PHP dari Nol Hingga mahir</strong><br>',
        'penulis'=> ' Admin SMK',   
    ],
    
    [
        'Judul' => ' <strong>Membuat Aplikasi Web dengan PHP</strong> <br>',
        'penulis'=> ' Admin SMK',   
    ]
];

    foreach ($aso as $key => $value ) {
        foreach ($value as $key => $value )  {
        echo $key. " : ".  $value["Judul"] . "<br>";
        echo $key." : " . $value["penulis"] . "<br>";
        echo '<hr>';
        }
        
    }


?>