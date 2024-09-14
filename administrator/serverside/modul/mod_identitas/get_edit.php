<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from identitas where Id_identitas='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="Id_identitas1" value="<?php echo $dataout['Id_identitas'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Website</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_website1" value="<?php echo $dataout['nama_website'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">URL</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="url1" value="<?php echo $dataout['url'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Meta Keyword</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="meta_keyword1" value="<?php echo $dataout['meta_keyword'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Meta Deskripsi</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="meta_deskripsi1" value="<?php echo $dataout['meta_deskripsi'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Email</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="email1" value="<?php echo $dataout['email'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">Alamat</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="alamat1" value="<?php echo $dataout['alamat'];?>">
    </div>
</div>
<div class="form-group">
    <label class="form-label" for="default-01">No. Telpon</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="no_telp1" value="<?php echo $dataout['no_telp'];?>" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
    </div>
</div>

