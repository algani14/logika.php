<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>From array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
            <fieldset>

            <legend>Array </legend>
            <FORM ACTION="" METHOD="GET" NAME="input">
            <label for=""> Masukan Jumlah </label> 
            <input type="number" min=1 name="jumlah" required>
            <br>
            <input type="submit" name="Input" value="Input">
            <hr>
            </FORM>

<?php
if (isset($_GET['Input'])) {
$a = $_GET['jumlah'];
for ($i=0; $i < $a ; $i++) { 
    
?>
            <FORM ACTION="formB.php" method="POST">            
            <table>
            <tr>
            <td><label for=> >Masukan Bilangan< </label></td>
            <td><input type="text" name="bilangan[]"></td>
            <td><label for=> >Masukan Pangkat Bilangan< </label></td>
            <td><input type="text" name="pangkat[]"></td>
            </tr></table>


                    </table>
                    <?php
                    }
                    ?>
                    <tr>
                    <td><input type="submit" name="sbm" value="submit"></td>
                    <td><button type="reset" name="reset">reset</button></td>
                    
                    </tr>
                    
                    <?php
                    }   
                    ?>
</FORM>
    </fieldset>
</body>
</html>
