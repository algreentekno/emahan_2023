<?php
include "../../../config/koneksi_li.php";
include "../../../setting.php";
$sql1= "SELECT * from sampah_layanan_tpa where Id_sampah_tpa='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<img src="<?php echo $urlmain;?>foto_tempat/<?php echo $dataout['foto'];?>" class="img-fluid" />