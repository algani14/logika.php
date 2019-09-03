<?php

$a = array('al' , 14 , true , 'abang');
//menampilkan array satu satu
echo'array menggunakan echo <br>';
echo $a[0] . '<br>';
echo $a[3] . '<br>';

echo'<br>';

echo 'array menggunakan looping for<br>';
for ($i=0; $i < count($a); $i++) { 
    echo"array - " . $a[$i] . "<br";
}

echo'<br>';
echo'<br>';
echo'<br>';
echo'array menggunakan foreach <br>';
foreach ($a as $index => $value) {
    echo'array - '. $index . " " . $value . '<br>'; 
}
?>