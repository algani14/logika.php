<?php
if (isset($_POST['sbm'])) {
$b = $_POST['uts'];    
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



echo "<pre>";

echo "Nama                        : <b>$nama<br>";
echo "alamat                      : <b>$alamat<br>";
echo "Jenis Kelamin               : <b>$kelamin<br>";
echo "Tanggal Beli                : <b>$tanggal<br>";
echo "Jumlah Buku                 : <b>$jml<br>";
echo "<hr>";
?>
<?php
if (isset($_POST['sbm'])) {
    

for ($a=0; $a < count($judul); $a++) { 
    

            echo "Judul Buku  : $judul[$a] <br>".
             "kode buku   : " .$kode [$a] ."<br>".
             "pengarang   : " .$pengarang [$a]. " <br>".
             "jenis buku  : " .$jenis [$a]. " <br>".
             "harga buku  : " .$harga [$a]. " <br>";
            echo "<hr>";
        
    }
    
}
}



?>