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
<form action="" method="post">
	Panjang : <input type="text" name="panjang"><br>
	Lebar : <input type="text" name="lebar"><br>
	<input type="submit" name="submit" value="Hitung">
</form>
 
<?php
	if(isset($_POST['submit'])){
		$panjang = $_POST['panjang'];
		$lebar = $_POST['lebar'];
		
		$luas = $panjang * $lebar; // Menghitung luas
		
		echo "Persegi panjang yang memiliki lebar: $lebar, dan panjang : $panjang, maka : <br>";
		echo "Luas: $luas <br>";
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