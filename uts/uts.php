<html>
<head>2
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>From array</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
            <h4 align="center">Assalaam BookStore</h4>
            <fieldset>

            <legend align="center"><b>Store Book </b></legend>
    
            <FORM ACTION="" METHOD="POST" NAME="input">
            <label for=""> Nama : </label> 
            <input type="text" name="nama" >
            <br>
            <label for=""> alamat : </label> 
            <textarea name="alamat" cols="40"
            rows="5" ></textarea>
            <br>
            <label for=""> Jenis Kelamin : </label>
            <input type="radio" name="jns" value="Laki - Laki" checked>
            Laki Laki 
            <input type="radio" name="jns" value="Perempuan"> Perempuan<br>
            <br>
            
            <label for=""> tanggal beli : </label>
            <input type="date" name="tgl"> 
            <br>
            <label for=""> jumlah Pembelian Buku : </label>
            <input type="number" min=1 name="jumlah" >
            <br>
            <input type="submit" name="Input" value="Input">
            <hr>
            </FORM>  

<?php
if (isset($_POST['Input'])) {
$a = $_POST['jumlah'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$kelamin = $_POST['jns'];
$tanggal = $_POST['tgl'];
$jml = $_POST['jumlah'];
$judul = $_POST['judul'];
$kode = $_POST['kode'];
$pengarang = $_POST['pengarang'];
$jenis = $_POST['jenis'];
$harga = $_POST['harga'];
for ($i=0; $i < $a ; $i++) { 
    
?>
            <FORM ACTION="uts1.php" method="POST">            
            <table>
            <tr>
            <td><label for=> Judul Buku  </label></td>
            <td><input type="text" name="judul[]"></td>
            <td><label for=> kode buku </label></td>
            <td><input type="text" name="kode[]"></td>
            <td><label for=> pengarang </label></td>
            <td><input type="text" name="pengarang[]"></td>
            <td><label for=> jenis buku </label></td>
            <td><select name="jenis[]">
            <option name="novel" value="Novel">Novel</option>
            <option name="fiksi" value="Fiksi">Fiksi</option>
            <option name="horror" value="Horror">Horror</option>
            <option name="cergam" value="Cergam">Cergam</option>
            <option name="komik" value="Komik">Komik</option>
            </td></select>
            <td><label for=> Harga Buku  </label></td>
            <td><input type="text" name="harga"></td> 
            
            
            <input type="hidden" name="nama" >
            <input type="hidden" name="alamat" >
            <input type="hidden" name="jns" >
            <input type="hidden" name="tgl" > 
            <input type="hidden" name="jumlah" >
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