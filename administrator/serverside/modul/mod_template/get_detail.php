<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from templates where id_templates='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="id_templates1" value="<?php echo $dataout['id_templates'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Judul Template</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="judul1" placeholder="" value="<?php echo $dataout['judul'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Pembuat</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="pembuat1" placeholder="" value="<?php echo $dataout['pembuat'];?>" readonly>
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Folder</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="folder1" placeholder="" value="<?php echo $dataout['folder'];?>" readonly>
    </div>
</div>

