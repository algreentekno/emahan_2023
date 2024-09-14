<?php
include "../config/koneksi_li.php";
?>
<option value=""></option>
<?php
$sql= "SELECT * FROM kelurahan  where kode_kec='$_POST[kode_kec]'"; 
$hasil = mysqli_query($koneksi,$sql);
while ($data = mysqli_fetch_array($hasil)) {
?>
<option value="<?php echo"$data[kode_kel]";?>"><?php echo"$data[nama_kelurahan]";?></option>
<?php 
}
?>