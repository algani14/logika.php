<?php

$transport = [
    ['Nama'=>'ujang' , 'kelas' => "14", 'alamat' => "bandung"],
['Nama'=>'mahmud' , 'kelas' => "13", 'alamat' => "bandung"],
['Nama'=>'ucok' , 'kelas' => "12", 'alamat' => "bandung" ]
];
echo "<pre>";
print_r ($transport);
echo "</pre>"; 

$mode = current($transport[1]);
echo $mode."<br>"; // $mode = 'foot';


?>