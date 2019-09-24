<?php
session_start();
if ($_SESSION['akseslogin']) {
    ?>



<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<nav>
<a href="hal1.php">halaman 1</a>|
<a href="hal2.php">halaman 2</a>|
<a href="hal3.php">halaman 3</a>|
<a href="logout.php">logout</a>|
</nav>
<br>

<form action="" method="POST">
alas : <input type="number" name="alas"required>
<br>
tinggi : <input type="number" name="tinggi"required>
<br>
<input type="submit" name="submit" value="masukan">
    </form>
<?php
    if(isset($_POST['submit'])){
	$alas = $_POST['alas'];
	$tinggi = $_POST['tinggi'];
	
	$luas_segitiga = 1/2 * $alas * $tinggi; 
	
	echo "Luas segitiga dengan alas : $alas, dan tinggi $tinggi <br>";
	echo "yaitu $luas_segitiga";
}
?>
    
</body>
</html>
<?php
} else {
    echo "<script>alert ('silahkan login terlebih dahulu');" . 
    "window.location.href='login.php'</script>";
}

?>