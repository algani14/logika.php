
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
    for ($i=1; $i <= $bintang ; $i++) { 
        for ($a=$bintang; $a >=$i ; $a--) { 
            echo"&nbsp";
        }
        for ($b=1; $b <= $i ; $b++) { 
            echo"*";
        }
        echo"<br>";
    }
    for ($i=1; $i <= $bintang ; $i++) { 
        for ($a=1; $a <=$i ; $a++) { 
            echo"&nbsp";
        }
        for ($b=$bintang; $b >= $i ; $b--) { 
            echo"*";
        }
        echo"<br>";
    }
    echo"<br>";  

    echo " total bintang = $bintang";
}

?>