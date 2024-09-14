<?php
include "../../../config/koneksi_li.php";
$sql1= "SELECT * from kategori_download where id_kategoridownload='$_POST[Id]'"; 
$hasil1 = mysqli_query($koneksi,$sql1);
$dataout=mysqli_fetch_array($hasil1);
?>
<input type="hidden" class="form-control" id="id_kategoridownload1" value="<?php echo $dataout['id_kategoridownload'];?>" required>
<div class="form-group">
    <label class="form-label" for="default-01">Nama Kategori</label>
    <div class="form-control-wrap">
        <input type="text" class="form-control" id="nama_kategori1" placeholder="" value="<?php echo $dataout['nama_kategori'];?>">
    </div>
</div>


