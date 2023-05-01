<HEAD><TITLE>Kalender</TITLE>
 <link rel="stylesheet" href="style.css"/>
    <link
      rel="stylesheet"
    ></link>
  <title>Web Ananda NR</title>
    <ul id="float">
    <li><a href="index.php">Home</a></li>
    <li><a href="tampilan.php">Guestbook</a></li>
    </ul></HEAD>
<BODY>
<FORM NAME="formku">
<div class="card">
<?php
$month= date ("m");
$year=date("Y");
$day=date("d");
$endDate=date("t",mktime(0,0,0,$month,$day,$year));
echo '<font face="arial" size="3">';
echo '<table ><tr><td align=center>';
echo "Hari ini tanggal : ".date("d F Y ",mktime(0,0,0,$month,$day,$year));
echo '<table cellspacing=0 border=1>
  <tr bgcolor="blue">
  <td align=center><font color=red>Minggu</font></td>
  <td align=center>Senin</td>
  <td align=center>Selasa</td>
  <td align=center>Rabu</td>
  <td align=center>Kamis</td>
  <td align=center>Jumat</td>
  <td align=center>Sabtu</td>
  </tr>';
$s=date ("w", mktime (0,0,0,$month,1,$year));
for ($ds=1;$ds<=$s;$ds++) {
echo "<td>
</td>";}
for ($d=1;$d<=$endDate;$d++) {
if (date("w",mktime (0,0,0,$month,$d,$year)) == 0) { echo "<tr>"; }
$fontColor="#000";
if (date("D",mktime (0,0,0,$month,$d,$year)) == "Sun") { $fontColor="red"; }
echo "<td style=\"font-family:arial;color:#333333\" align=center valign=middle> <span style=\"color:$fontColor\">$d</span></td>";
if (date("w",mktime (0,0,0,$month,$d,$year)) == 6) { echo "</tr>"; }}
echo '</table>';
?>
</div>
</FORM>
<div align="center"><strong><font size="6" face="Courier New, 
Courier, mono">BUKU TAMU </font></strong></div> 

<form name="form1" method="post" action="proses.php"> 
<table width="58%" border="0" align="center"> 
<tr> 
<td>Nama Lengkap</td> 
<td><input name="nama" type="text" id="nama"></td> 
</tr> 

<tr> 
<td>Alamat</td> 
<td><input name="alamat" type="text" id="alamat"></td> 
</tr>

<tr> 
<td>E-Mail</td> 
<td><input name="email" type="text" id="email"></td> </tr> 
</tr> 

<tr> 
<td>Status</td> 
<td><select name="status" id="status"> 
<option>Menikah</option> 
<option>Single</option> 
</select></td> 
</tr> 
<tr> 
<td>Komentar</td> 
<td><textarea name="komentar" id="komentar"></textarea></td> 
</textarea>
</tr> 

<tr> 
<td>&nbsp;</td> 
<td><input type="submit" name="Submit" value="Kirim"><input 
type="reset" 
name="Submit2" value="Batal"> 
</td> 
</tr> 
</table> 
</form> 
<div align="center"><strong><a href="lihat.php">::Lihat Buku 
Tamu:: 
</a></strong></div> 
</br></br>
<form enctype="multipart/form-data" method="post"
action="latihan33_upload.php">
File yang diupload : <input type="file" name="fupload"><br>
Deskripsi File : <br><textarea name="deskripsi" rows="6"
cols="20"></textarea><br>
<input type=submit value=Upload>
</form>
</BODY>
</HTML>