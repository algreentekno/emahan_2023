<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from upload_data where rdm='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<embed type="application/pdf" src="upload/<?php echo $dataout['berita_acara'];?>" width="100%" height="400"></embed></div>



