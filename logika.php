<?php

$gol=9;

if ($gol >= 10 ) {
    echo "mendali emas = " .$gol ." Gol";
    switch ($gol) {
            case 20:
                echo " & Mendapatkan Bonus 100jt";
                break;
        
            default:
                #code ...
                break; 
        }    
    }    
    elseif ($gol >= 7) {
        echo "mendali perak = " .$gol." Gol";
        switch ($gol) {
            case 9:
                echo " & Mendapatkan Bonus 80jt";
                break;
            
            default:
                # code...
                break;
        }
    }
    elseif ($gol >= 4) {
        echo"mendali perunggu = " .$gol." Gol";
        switch ($gol) {
            case 5:
                echo "Mendapatkan Bonus 50jt";
                break;
            
            default:
                # code...
                break;
        }
    }
    elseif ($gol < 4) {
        echo "mendali emas ngambang =" .$gol." Gol";
        switch ($gol) {
            case 3:
                # code...
                break;
            
            default:
                echo " & Tidak Mendapatkan Bonus";
                break;
        }
    }


?>