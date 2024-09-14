<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from link where id_link='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="id_link1" value="<?php echo $dataout['id_link'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Link</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_link1" placeholder="" value="<?php echo $dataout['nama_link'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">URL</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="url1" placeholder="" value="<?php echo $dataout['url'];?>" readonly>
    </div>
</div>

