<html>
    <head><title>Pengolahan Form</title></head>
    <body>
        <h1><center>Tugas</center></h1>
            <FORM ACTION="hasil.php" METHOD="POST" NAME="input">
                <table>
                        <tr>
                            <td>Nama  </td>
                        <td><input type="text" name="nm"><br></tr></td>

                        <tr>
                            <td>NIP   </td>
                            <td><Input type="number" name="nip"><br></tr></td>


                        <tr>
                            <td>Jenis kelamin </td>
                            <td> <input type="radio" name="jenis" value="Lk" checked>
                            Laki Laki 
                            <input type="radio" name="jenis" value="pr"> Perempuan<br></tr></td>
<tr>

<tr>
<td>Alamat</td>
<td><textarea name="alm" cols="40"
rows="5"></textarea><br></td></tr>

<td>status</td>
<td><select name="status">
<option name="menikah" value="menikah">menikah</option>
<option name="belum" value="belum menikah">belum menikah</option>

</tr></td>

</select>
<br>
<td>jabatan</td>
<td><select name="jabatan">
<option name = "hrd" value="hrd">hrd</option>
<option name = "manager" value="manager">manager</option>
<option name = "staff" value="staff">staff</option>
<option name = "karyawan" value="karyawan">karyawan</option>

</tr></td>

</select>

 <tr>
 <br>

<tr>
<td> potongan </td> 
<td><input type = "checkbox" name="bpjs" value="bpjs"
checked> bpjs
<input type="checkbox" name="kp" value="koperasi"> koperasi
<input type="checkbox" name="jamsostek" value="jamsostek">
jamsostek
</td>
<br>
 </tr>

 <td>golongan</td>
<td><select name="golongan">
<option name ="A1" value="A1">A1</option>
<option name ="A2" value="A2">A2</option>
<option name ="A3" value="A3">A3</option>


</tr></td>
 

 <tr>
 <br>
 </table>
 
<input type="submit" name="input" value="input">

</FORM>
</body>
</html>