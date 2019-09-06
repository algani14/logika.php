
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>biodata pribadi</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>

<form action = "" METHOD="POST" NAME="input">
Nama  : <input type="text" name="nama"><br>
Kelas   :   <input type="text" name="kelas"><br>
Alamat: <input type="text" name="alamat"><br>
Hobi    :   <input type="text" name="hobi"><br>
<input type="submit" name="Input" value="Input">
</form>


    
</body>
</html>
<?php
if (isset($_POST['Input'])) {
$nama = $_POST['nama'];
$kelas = ($_POST['kelas']);
$alamat = ($_POST['alamat']);
$hobi = ($_POST['hobi']);
echo "Nama : <b>$nama</b><br>";
echo "kelas : <b>$kelas</b><br>";
echo "alamat : <b>$alamat</b><br>";
echo "hobi : <b>$hobi</b>";
}
?>