
<html>
<head>
    <title>latihan form</title>

</head>
<body>
<form action="" method="POST">
Masukan Bilangan : <input type="number" name="bintang"required>
<input type="submit" name="submit" value="masukan">
    </form>
</body>
</html>
<?php

if (isset($_POST['submit'])) {
    $bintang = $_POST['bintang'];
    for ($i=0; $i <= $bintang ; $i++) { 
        for ($a=0; $a <=$bintang-$i ; $a++) { 
            echo"&nbsp;&nbsp;";
        }
        for ($b=0; $b <= $i ; $b++) { 
            echo"*&nbsp;&nbsp;";
        }
        echo"<br />";
    }
      
    echo "<br>";
    echo " total bintang = $bintang";
}

?>

