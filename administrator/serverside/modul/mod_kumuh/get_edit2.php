<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from kumuh_luas where Id_kumuh_luas='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="Id_kumuh_luas2" value="<?php echo $dataout['Id_kumuh_luas'];?>" required>

<div class="form-group">
    <label class="form-label" for="default-01">Gambar Kawasan</label><br>
    <small>Apabila file ingin dirubah silahkan upload file baru</small>
    <div class="form-control-wrap">
    <input type="file" class="form-control" id="files2" value="">
    </div>
</div>


