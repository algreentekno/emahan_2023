<?php
include "../../../config/koneksi_li.php";
include "../../../setting.php";
$sql1= "SELECT * from air_minum_regional where Id_air_regional='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<img src="<?php echo $urlmain;?>foto_tempat/<?php echo $dataout['foto'];?>" class="img-fluid" />