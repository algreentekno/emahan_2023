<?php
include "../config/koneksi_li.php";
?>
<option value=""></option>
<?php
$sql= "SELECT * FROM kecamatan  where kode_kota='$_POST[kode_kota]'"; 
$hasil = mysqli_query($koneksi,$sql);
while ($data = mysqli_fetch_array($hasil)) {
?>
<option value="<?php echo"$data[kode_kec]";?>"><?php echo"$data[nama_kecamatan]";?></option>
<?php 
}
?>