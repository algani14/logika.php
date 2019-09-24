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
<p>Masukkan Jari-Jari Lingkaran</p>
<form action="" method="post">
	Jari-jari :<input type="text" name="jari2"><br>
	<input type="submit" name="submit" value="Hitung">
</form>

<?php
if(isset($_POST['submit'])){
	$jari2 = $_POST['jari2'];
	$phi = 22/7;
	$luas_lingkaran = $phi * $jari2 * $jari2;
	
	
	echo "Lingkaranan dengan jari-jari $jari2 maka memiliki <br>";
	echo "Luas : $luas_lingkaran <br>";
	
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