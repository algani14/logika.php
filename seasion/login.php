<?php
session_start();

?>

<!DOCTYPE html>
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
<a href="login.php">login</a>|
</nav>
<form action="" method="post">
    Email <input type="email" name="email" required>
    <br> Password<input type ="password" name="pass" required>
    <br> <input type = "submit" value="login" name="akses">
    </form>
</body>
</html> 
<?php
if (isset($_POST['akses'])) {
    $a=$_POST['email'];
    $b=$_POST['pass'];

    if ($a == "admin@gmail.com" && $b == "123456") {
        $_SESSION['akseslogin'] = 'admin';
        header("location:hal1.php");
    }else {
        echo "login gagal";
    }
}elseif ($_SESSION['akseslogin']) {
    echo "<script>alert ('anda sudah login');" . 
    "window.location.href='hal1.php'</script>";
}

?>