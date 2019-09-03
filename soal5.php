<?php
$array = array('<strong>Judul </strong>', 'Penulis');
$aso = [
    [
        'volvo' => ' <li>volvo <br>',
        '22'=> '  <li>22 ',
        '13'=> ' <li>18',
    ],
    
    [
        'volvo' => ' <li>BMW <br>',
        '22'=> '  <li>15 ',
        '13'=> ' <li>13',   
    ],
    
    [
        'volvo' => ' <li>saab <br>',
        '22'=> '  <li>22 ',
        '13'=> ' <li>18'   
    ]
];

        foreach ($aso as $value )  {
        echo '<p>';
        echo 'data mobil <br>';    
        echo $value ['volvo'] . '<br>';
        echo $value ['22'] . '<br>';
        echo $value ['13'] . '<br>';    
     
        }
        
    


?>