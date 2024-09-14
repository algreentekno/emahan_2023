<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from kota where Id='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="id1" value="<?php echo $dataout['Id'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Kode Kabupaten/Kota</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="kode_kota1" placeholder="" value="<?php echo $dataout['kode_kota'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kabupaten/Kota</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_kota1" placeholder="" value="<?php echo $dataout['nama_kota'];?>" readonly>
    </div>
</div>

