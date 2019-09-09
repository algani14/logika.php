<html>
<head><title>Pengolahan Form</title></head>
<body>
<h1><center>Tugas</center></h1>
<FORM ACTION="tugas1.php" METHOD="POST" NAME="input">
<table>
<tr>
<td>Nama  </td>
 <td><input type="text" name="nama"><br></tr></td>

 <tr>
<td>NIS   </td>
<td><Input type="number" name="nis"><br></tr></td>

<tr>
<td>Alamat</td>
<td><textarea name="alamat" cols="40"
rows="5"></textarea><br></td></tr>

<tr>
<td>Jenis kelamin </td>
<td> <input type="radio" name="jenis" value="Lk" checked>
Laki Laki 
<input type="radio" name="jenis" value="pr"> Perempuan<br></tr></td>

<tr>

<td>agama</td>
<td><select name="agama">
<option value="islam">islam</option>
<option value="kristen">kristen</option>
<option value="budha">budha</option>
</tr></td>

</select>
<br>
<tr>
<td>Asal sekolah </td>
 <td><input type="text" name="asal"><br></tr></td>

 <tr>
 <br>
 <tr>
<td>Nama orang tua  </td>
 <td><input type="text" name="orang"><br></tr></td><br>
<tr>
<td> mata pelajaran </td> 
<td><input type = "checkbox" name="mtk" value="mtk"
checked> mtk
<input type="checkbox" name="ips" value="ips"> ips
<input type="checkbox" name="ipa" value="ipa">
ipa
</td>
<br>
 </tr>
 <tr>
<td>nilai ijasah </td>
 <td><input type="text" name="ijasah"><br></tr></td>

 <tr>
 <br>
 <tr>
<td>email </td>
 <td><input type="text" name="email"><br></tr></td>

 <tr>
 <br>
 </table>
 
<input type="submit" name="input" value="input">

</FORM>
</body>
</html>